var gulp = require('gulp');
var sourcemaps = require('gulp-sourcemaps');
var sass = require('gulp-sass');
var clean = require('gulp-clean');
var browserSync = require('browser-sync');

var srcFolder = "./src";
var destFolder = "./tmp";

// Clean up the tmp (aka dev build) folder
gulp.task('clean-tmp', function(){
  return gulp.src(destFolder, {read: false})
    .pipe(clean({force: true}))
    .pipe(gulp.dest(destFolder));
});

// Convert all *.sass files in project src to CSS files into the dev folder (tmp)
gulp.task('sass-dev', function(){
  return gulp.src(srcFolder + '/sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(destFolder + '/css'))
});

// Copy all *.html files in project src into the dev folder (tmp)
gulp.task('copy-index-dev', function(){
  return gulp.src(srcFolder + '/**/*.html')
    .pipe(gulp.dest(destFolder));
});

// Copy all assets over to dev folder (tmp)
gulp.task('copy-assets-dev', function(){
  return gulp.src(srcFolder + '/assets/**/*.*')
    .pipe(gulp.dest(destFolder + '/assets'));
});

// Runs all the development build requirements, then just returns true when they're finished
gulp.task('wait-clean-temp', ['clean-tmp'], function(){
  return true;
});

gulp.task('build-dev', ['wait-clean-temp'], function(){
  gulp.start(['copy-index-dev', 'copy-assets-dev', 'sass-dev']);
});

// Auto updates the browser when the dev folder (tmp) gets updated
gulp.task('browserSync', function(){
  browserSync.init({
    server: {
      baseDir: destFolder
    },
    // Don't auto open a new browser window...just open it yourself!
    open: false
  });

  gulp.watch(destFolder + "/**/*.*", browserSync.reload);
});

// Observes a series of folder observations and then runs a corresponding task
gulp.task('watch', function(){
  // watch for sass file changes in directory and run 'sass-dev'
  gulp.watch(srcFolder + '/sass/**/*.scss', ['sass-dev']);
  // watch for html file changes in directory and run 'copy-index-dev'
  gulp.watch(srcFolder + '/**/*.html', ['copy-index-dev']);
  // watch for asset changes
  gulp.watch(srcFolder + '/assets/**/*.*', ['copy-assets-dev']);
});

// The main gulp task - runs in order based on any dependencies (if any) on each task
gulp.task('default', ['clean-tmp', 'build-dev', 'browserSync', 'watch']);