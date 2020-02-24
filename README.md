# joecullin.com

Code for the www.joecullin.com site.

## Overview

- src/css - sass files
- src/js - javascript files
- src/site - php, images, etc. -- copied as-is into the build.
- dist - target of build
- package.json file -- for gulp.


## Dev environment setup

Get the code:
```
cd /code
git clone https://github.com/joecullin/joecullin.com.git
mv joecullin.com jc.com
```

Build to `dist` dir:
```
cd jc.com

pushd src/js
npm install
popd

npm install --global gulp-cli
npm install

gulp
```

Docker container with php/apache, pointed at `dist` dir:
```
docker pull nimmis/apache-php7
docker run -d -p 8077:80 -v /code/jc.com/dist/:/var/www/html nimmis/apache-php7
```

I just grabbed a container from https://hub.docker.com/. It's not configured quite the same as prod (for example it ignores .htaccess) but it's good enough for local dev.

## Deploy

Stage:
```
gulp deployTest
```
Production:
```
gulp deployProduction
```