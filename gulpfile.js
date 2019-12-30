const gulp = require("gulp");
const del = require("del");
const sass = require("gulp-sass");
const gulpIf = require("gulp-if");
const cssnano = require("gulp-cssnano");
const rename = require("gulp-rename");
const rsync = require("gulp-rsync");
const prompt = require("gulp-prompt");

let target = "dev";
const paths = {
  input: "src",
  output: "dist/*",
  sass: {
    input: "src/css/**/*.scss",
    output: "dist/assets/css"
  },
  copy: {
    input: "src/site/**/*",
    output: "dist/"
  },
  deploy: {
    source: "dist/**",
    outputRoot: "dist/",
    targetHost: "www.joecullin.com",
    pathStaging: "/home/jcullin/test.joecullin.com/",
    pathProduction: "/home/jcullin/joecullin.com/"
  }
};

const setTestTarget = done => {
  target = "test";
  done();
};

const setProdTarget = done => {
  target = "production";
  done();
};

const deploy = done => {
  if (target === "dev") {
    console.log("Can't deploy to dev.");
    done();
    return;
  }

  // prod & test are hosted on same server. Only difference is path.
  const targetPath =
    target === "production"
      ? paths.deploy.pathProduction
      : paths.deploy.pathStaging;

  return gulp.src(paths.deploy.source).pipe(
    rsync({
      root: paths.deploy.outputRoot,
      hostname: paths.deploy.targetHost,
      destination: targetPath,
      archive: true,
      // dryrun: true,
      silent: false
    })
  );
};

// html, php, and other files that are copied into dist as-is.
const copyFiles = function(done) {
  return gulp
    .src(paths.copy.input)
    .pipe(
      // Files like .htaccess are named dot_htaccess, so we can explicitly
      // include them, without complex rules to avoid .swp, .gitignore, etc.
      rename(function(path) {
        path.basename = path.basename.replace(/^dot_/, ".");
      })
    )
    .pipe(gulp.dest(paths.copy.output));
};

// css files
const buildStyles = () => {
  return gulp
    .src(paths.sass.input)
    .pipe(sass())
    .pipe(gulpIf("*.css", cssnano()))
    .pipe(gulp.dest(paths.sass.output));
};

// wipe the dist dir clean.
// (Don't remove the dir: that confuses the dev server and requires docker restart.)
const cleanDist = done => {
  del.sync([paths.output]);
  return done();
};

// watcher
const watchSource = function(done) {
  gulp.watch(
    paths.input,
    gulp.series(exports.default)
  ); /* browserSync reload would go here */
  done();
};

// Isolated functions, for troubleshooting.
exports.clean = gulp.series(cleanDist);
exports.copy = gulp.series(copyFiles);

// Default when I just run 'gulp'.
// (Also the basis of watch and deploy commands.)
exports.default = gulp.series(cleanDist, gulp.parallel(buildStyles, copyFiles));

exports.watch = gulp.series(exports.default, watchSource);

exports.deployTest = gulp.series(setTestTarget, exports.default, deploy);
exports.deployProduction = gulp.series(setProdTarget, exports.default, deploy);
