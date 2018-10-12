var 
browserify = require('browserify'),
      gulp = require('gulp'),
livereload = require('gulp-livereload'),
      sass = require('gulp-sass'),
    buffer = require('vinyl-buffer'),
    source = require('vinyl-source-stream'),
  watchify = require('watchify');
      

var paths = {
  build : 'common/',
  fonts : 'src/fonts/*.{eot,svg,ttf,woff,woff2}',
  styles : 'src/scss/**/*.scss',
}

var bundler = watchify(browserify('./src/js/main.js', watchify.args)); 

gulp.task('styles', function(){
  gulp.src(paths.styles)
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(gulp.dest(paths.build + 'css'))
});

function createBundle() {
  return bundler.bundle()
    .on('error', function(err){
      console.log(err.message);
    })
    .pipe(source('bundle.js'))
    .pipe(gulp.dest(paths.build + 'js'));
}

gulp.task('scripts', createBundle);
bundler.on('update', createBundle);

gulp.task('watch', function(){
  gulp.watch(paths.styles, ['styles']);
});

gulp.task('fonts', function(){
  gulp.src(paths.fonts)
    .pipe(gulp.dest(paths.build + 'fonts'))
});

gulp.task('default', ['styles','watch']);
