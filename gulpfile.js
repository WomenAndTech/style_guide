var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass-dev', function(){
  return gulp.src('./src/sass/**/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./tmp/css'))
});

gulp.task('default', function() {
  gulp.watch('./src/sass/**/*.scss', ['sass-dev']);
});