//npm install gulp gulp-sourcemaps gulp-sass gulp-clean browser-sync --save-dev

var gulp = require('gulp');
var sourcemaps = require('gulp-sourcemaps');
var sass = require('gulp-sass');
var clean = require('gulp-clean');
var browserSync = require('browser-sync');
var runSequence = require('run-sequence');

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
gulp.task('copy-html-dev', function(){
  return gulp.src(srcFolder + '/**/*.html')
    .pipe(gulp.dest(destFolder));
});

// Copy all assets over to dev folder (tmp)
gulp.task('copy-assets-dev', function(){
  return gulp.src(srcFolder + '/assets/**/*.*')
    .pipe(gulp.dest(destFolder + '/assets'));
});

// Copy all assets over to dev folder (tmp)
gulp.task('copy-scripts-dev', function(){
  return gulp.src(srcFolder + '/scripts/**/*.*')
    .pipe(gulp.dest(destFolder + '/scripts'));
});

gulp.task('build-dev', ['clean-tmp'], function(resolve){
  runSequence(['copy-html-dev', 'copy-assets-dev', 'copy-scripts-dev', 'sass-dev'], resolve);
});

// Auto updates the browser when the dev folder (tmp) gets updated
gulp.task('serve', ['build-dev'], function(){
  browserSync.init({
    server: {
      baseDir: destFolder
    },
    // Don't auto open a new browser window...just open it yourself!
    open: false
  });
});

gulp.task('html-watch', ['copy-html-dev'], function(){
  browserSync.reload();
});
gulp.task('sass-watch', ['sass-dev'], function(){
  browserSync.reload();
});
gulp.task('assets-watch', ['copy-assets-dev'], function(){
  browserSync.reload();
});

// Observes a series of folder observations and then runs a corresponding task
gulp.task('watch', ['build-dev'], function(){
  // watch for html file changes in directory and run 'copy-html-dev'
  gulp.watch(srcFolder + '/**/*.html', ['html-watch']);
  // watch for sass file changes in directory and run 'sass-dev'
  gulp.watch(srcFolder + '/sass/**/*.scss', ['sass-watch']);
  // watch for asset changes
  gulp.watch(srcFolder + '/assets/**/*.*', ['assets-watch']);
});

// The main gulp task - runs in order based on any dependencies (if any) on each task
gulp.task('default', ['serve', 'watch']);