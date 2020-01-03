const gulp = require("gulp");
const del = require("del");
const PluginError = require("plugin-error");
const sass = require("gulp-sass");
const gulpIf = require("gulp-if");
const cssnano = require("gulp-cssnano");
const filter = require("gulp-filter");
const rename = require("gulp-rename");
const rsync = require("gulp-rsync");
const concat = require("gulp-concat");
const babel = require("gulp-babel");
const uglify = require("gulp-uglify");
const optimizejs = require("gulp-optimize-js");
const debug = require("gulp-debug");
const through2 = require("through2");
const request = require("request");

let target = "dev";
const paths = {
  input: "src",
  output: "dist/*",
  sass: {
    input: "src/css/**/*.scss",
    output: "dist/assets/css"
  },
  js: {
    input: [
      "src/js/node_modules/html2canvas/dist/html2canvas.min.js",
      "src/js/node_modules/disintegrate/disintegrate.js",
      "src/js/*.js"
    ],
    output: "dist/assets/js",
    filename: "site.min.js"
  },
  copy: {
    input: "src/site/**/*",
    output: "dist/"
  },
  phpToHtml: {
    // (Uses some "copy" settings.)
    server: "http://localhost:8077/"
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

// Capture every index.php as an index.html file.
// I know this is a silly way to generate a static site.
// I'm just playing around and learning more about gulp.
//
const buildStaticHtml = function(done) {
  const fileFilter = filter(["**/index.php"]);

  return gulp
    .src(paths.copy.input)
    .pipe(fileFilter)
    .pipe(debug({ title: "index.php file:" }))

    .pipe(
      through2.obj(function(file, _, cb) {
        if (file.isBuffer()) {
          // Convert the file path to the dev site url.
          const url =
            paths.phpToHtml.server + file.relative.replace(/index.php$/, "");

          // Fetch the page contents.
          request(url, (error, response, body) => {
            const statusCode =
              response && response.statusCode ? response.statusCode : 0;
            if (statusCode !== 200) {
              cb(
                new PluginError(
                  "buildStaticHtml",
                  `Error fetching url '${url}' for '${file.relative}': ${error}. (http status=${statusCode})`
                )
              );
            }
            file.contents = Buffer.from(body);
            cb(null, file);
          });
        } else {
          cb(
            new PluginError(
              "buildStaticHtml",
              `file is not a buffer? '${file.relative}'`
            )
          );
        }
      })
    )
    .pipe(debug({ title: "converted to index.html file:" }))
    .pipe(
      rename(function(path) {
        path.extname = ".html";
      })
    )
    .pipe(gulp.dest(paths.copy.output));
};

// css files
const buildStyles = () => {
  return gulp
    .src(paths.sass.input)
    .pipe(debug({ title: "sass file:" }))
    .pipe(sass())
    .pipe(gulpIf("*.css", cssnano()))
    .pipe(gulp.dest(paths.sass.output));
};

// js files
const buildScripts = () => {
  const isCustom = path => {
    return path.dirname.match(/\/src\/js$/);
  };
  const isMin = path => {
    return !path.basename.match(/[.]min[.]js$/);
  };

  const useBabel = () => {
    return true;
  };
  const useUglify = () => {
    return true;
  };

  return gulp
    .src(paths.js.input)
    .pipe(debug({ title: "js file:" }))
    .pipe(gulpIf(isCustom, optimizejs()))
    .pipe(
      gulpIf(
        useBabel,
        babel({
          presets: ["env"]
        })
      )
    )
    .pipe(gulpIf(useUglify, uglify()))
    .pipe(concat(paths.js.filename))
    .pipe(gulp.dest(paths.js.output));
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
exports.default = gulp.series(
  cleanDist,
  gulp.parallel(buildStyles, buildScripts, copyFiles),
  buildStaticHtml
);

exports.watch = gulp.series(exports.default, watchSource);

exports.deployTest = gulp.series(setTestTarget, exports.default, deploy);
exports.deployProduction = gulp.series(setProdTarget, exports.default, deploy);
