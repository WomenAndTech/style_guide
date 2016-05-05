var gulp = require('gulp');
var sass = require('gulp-sass');
var clean = require('gulp-clean');
var browserSync = require('browser-sync');

var srcFolder = "src";
var destFolder = "tmp";

// Clean up the tmp (aka dev build) folder
gulp.task('clean-tmp', function(){
  return gulp.src(destFolder, {read: false})
    .pipe(clean({force: true}))
    .pipe(gulp.dest(destFolder));
});

// Convert all *.sass files in project src to CSS files into the dev folder (tmp)
gulp.task('sass-dev', ['clean-tmp'],function(){
  return gulp.src(srcFolder + '/sass/**/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest(destFolder + '/css'))
});

// Copy all *.html files in project src into the dev folder (tmp)
gulp.task('copy-index-dev', ['clean-tmp'], function(){
  return gulp.src(srcFolder + '/**/*.html')
    .pipe(gulp.dest(destFolder));
});

// Copy all assets over to dev folder (tmp)
gulp.task('copy-assets-dev', ['clean-tmp'], function(){
  return gulp.src(srcFolder + '/assets/**/*.*')
    .pipe(gulp.dest(destFolder + '/assets'));
});

// Runs all the development build requirements, then just returns true when they're finished
gulp.task('dev-build', ['copy-index-dev', 'sass-dev', 'copy-assets-dev'], function(){
  return true;
});

// Observes a series of folder observations and then runs a corresponding task
gulp.task('watch', ['dev-build'], function(){
  // watch for sass file changes in directory and run 'sass-dev'
  gulp.watch(srcFolder + '/sass/**/*.scss', ['sass-dev']);
  // watch for html file changes in directory and run 'copy-index-dev'
  gulp.watch(srcFolder + '/**/*.html', ['copy-index-dev']);
  // watch for asset changes
  gulp.watch(srcFolder + '/assets/**/*.*', ['copy-assets-dev']);
});

// Auto updates the browser when the dev folder (tmp) gets updated
gulp.task('browserSync', ['dev-build'], function(){
  browserSync.init({
    server: {
      baseDir: destFolder
    },
    // Don't auto open a new browser window...just open it yourself!
    open: false
  });

  gulp.watch(destFolder + "/**/*.*", browserSync.reload);
});

// The main gulp task - runs in order based on any dependencies (if any) on each task
gulp.task('default', ['clean-tmp', 'dev-build', 'watch', 'browserSync']);