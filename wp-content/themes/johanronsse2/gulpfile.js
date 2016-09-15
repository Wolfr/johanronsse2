var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();
var concat = require('gulp-concat');
var cssmin = require('gulp-cssmin');
var del = require('del');
var gulp = require('gulp');
var jsmin = require('gulp-jsmin');
var rename = require('gulp-rename');
var replace = require('gulp-replace-task');
var sass = require('gulp-sass');

// Concat our scripts
gulp.task('concatscripts', function() {

  gulp.src(['./js/scripts.js'])
    .pipe(concat('scripts.js'))
    .pipe(jsmin())
    .pipe(gulp.dest('./dist/'));

});
 
// Now the styles get generated, they get minified
gulp.task('sass', function() {
    gulp.src('scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 5 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('./css/'))
        .pipe(browserSync.stream())
        .pipe(cssmin())
        .pipe(gulp.dest('./dist/'))
});

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

  browserSync.init({
      proxy: "johanronsse.dev",
      notify: false
  });

  gulp.watch('scss/**/*.scss',['sass']);
  gulp.watch("**/*.php").on('change', browserSync.reload);

});

gulp.task('default', ['concatscripts', 'sass', 'serve']);
