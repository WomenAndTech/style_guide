var gulp = require('gulp');
var sass = require('gulp-sass');
var del = require('del');
var browserSync = require('browser-sync');

var srcFolder = "./src";
var destFolder = "./tmp";

// Convert all *.sass files in project src to CSS files into the dev folder (tmp)
gulp.task('sass-dev', function(){
  return gulp.src(srcFolder + '/sass/**/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest(destFolder + '/css'))
});

// Copy all *.html files in project src into the dev folder (tmp)
gulp.task('copy-index-dev', function(){
  return gulp.src(srcFolder + '/**/*.html')
    .pipe(gulp.dest(destFolder + '/'));
});

gulp.task('init-dev', function(){
  del(destFolder);
});

gulp.task('browserSync', function(){

  browserSync.init({
    server: {
      baseDir: destFolder
    }
  });

  gulp.watch(destFolder + "/**/*.*").on('change', browserSync.reload);
});

// Run 'copy-index-dev' and 'sass-dev' tasks first as dependencies before running async tasks in function()
gulp.task('default', ['init-dev', 'copy-index-dev', 'sass-dev', 'browserSync'], function(){
  // watch for sass file changes in directory and run 'sass-dev'
  gulp.watch(srcFolder + '/sass/**/*.scss', ['sass-dev']);
  // watch for html file changes in directory and run 'copy-index-dev'
  gulp.watch(srcFolder + '/**/*.html', ['copy-index-dev']);
});