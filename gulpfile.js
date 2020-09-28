// Gulp.js configuration
'use strict';

const

  projectName = `dentist-concept`,

  // source and build folders
  dir = {
    src         : `./`,
    build       : `../public/wp-content/themes/${projectName}/`
  },

  // Gulp and plugins
  gulp          = require('gulp'),
  gutil         = require('gulp-util'),
  newer         = require('gulp-newer'),
  imagemin      = require('gulp-imagemin'),
  sass          = require('gulp-sass'),
  postcss       = require('gulp-postcss'),
  deporder      = require('gulp-deporder'),
  concat        = require('gulp-concat'),
  stripdebug    = require('gulp-strip-debug'),
  uglify        = require('gulp-uglify'),
  babel         = require('gulp-babel')
;

// Browser-sync
var browsersync = false;




// PHP settings
const php = {
  src           : [dir.src + 'template/**/*.php', dir.src + 'partials/**/*.php'],
  build         : dir.build
};

// copy PHP files
gulp.task('php', () => {
  return gulp.src(php.src)
    .pipe(newer(php.build))
    .pipe(gulp.dest(php.build));
});




// image settings
const images = {
  src         : dir.src + 'images/**/*',
  build       : dir.build + 'images/'
};

// image processing
gulp.task('images', () => {
  return gulp.src(images.src)
    .pipe(newer(images.build))
    .pipe(imagemin())
    .pipe(gulp.dest(images.build));
});




// CSS settings
var css = {
  src         : dir.src + 'scss/style.scss',
  watch       : dir.src + 'scss/**/*',
  build       : dir.build,
  sassOpts: {
    outputStyle     : 'nested',
    imagePath       : images.build,
    precision       : 3,
    errLogToConsole : true
  },
  processors: [
    require('postcss-assets')({
      loadPaths: ['images/'],
      basePath: dir.build,
      baseUrl: `wp-content/themes/${projectName}/`
    }),
    require('autoprefixer')({
      overrideBrowserslist: ['last 2 versions', '> 2%']
    }),
    require('css-mqpacker'),
    require('cssnano')
  ]
};

// CSS processing

gulp.task('compileSCSS', () => {
  return gulp.src(css.src)
    .pipe(sass(css.sassOpts))
    .pipe(postcss(css.processors))
    .pipe(gulp.dest(css.build))
    .pipe(browsersync ? browsersync.reload({ stream: true }) : gutil.noop());
});

// change all 'compileSCSS' instances to 'css' if you enable this
gulp.task('css', gulp.series('images', 'compileSCSS'));




// JS settings
const js = {
  src         : dir.src + 'js/**/*',
  build       : dir.build + 'js/',
  filename    : 'scripts.js'
};

// JavaScript processing
gulp.task('js', () => {

  return gulp.src(js.src)
    .pipe(deporder())
    .pipe(concat(js.filename))
    .pipe(stripdebug())
    .pipe(babel({
      presets: ['@babel/env']
    }))
    .pipe(uglify())
    .pipe(gulp.dest(js.build))
    .pipe(browsersync ? browsersync.reload({ stream: true }) : gutil.noop());

});



// run all tasks
gulp.task('build', gulp.series('php', 'css', 'js'));


// Browsersync options
const syncOpts = {
  proxy       : `http://${projectName}-reload.test/`,
  files       : dir.build + '**/*',
  open        : false,
  notify      : false,
  ghostMode   : false,
  ui: {
    port: 8001
  }
};


// browser-sync
gulp.task('browsersync', (done) => {
  if (browsersync === false) {
    browsersync = require('browser-sync').create();
    browsersync.init(syncOpts);
  }
  done()
});

gulp.task('watchFiles', () => {

  // page changes
  gulp.watch(php.src, gulp.series('php', done => {
    browsersync.reload();
    done();
  }));

  // image changes
  gulp.watch(images.src, gulp.series('images'));

    // CSS changes
  gulp.watch(css.watch, gulp.series('css'));

  // JavaScript main changes
  gulp.watch(js.src, gulp.series('js'));


});

gulp.task('watch', gulp.series('browsersync', 'watchFiles'));

gulp.task('default', gulp.series('build', 'watch'));