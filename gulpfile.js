var gulp = require('gulp');
var sass = require('gulp-sass');
var del = require('del');

// Convert all *.sass files in project src to CSS files into the dev folder (tmp)
gulp.task('sass-dev', function(){
  return gulp.src('./src/sass/**/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./tmp/css'))
});

// Copy all *.html files in project src into the dev folder (tmp)
gulp.task('copy-index-dev', function(){
  return gulp.src('./src/**/*.html')
    .pipe(gulp.dest('./tmp/'));
});

gulp.task('init-dev', function(){
  del('./tmp');
});

// Run 'copy-index-dev' and 'sass-dev' tasks first as dependencies before running async tasks in function()
gulp.task('default', ['init-dev', 'copy-index-dev', 'sass-dev'], function(){
  // watch for sass file changes in directory and run 'sass-dev'
  gulp.watch('./src/sass/**/*.scss', ['sass-dev']);
  // watch for html file changes in directory and run 'copy-index-dev'
  gulp.watch('./src/**/*.html', ['copy-index-dev']);
});