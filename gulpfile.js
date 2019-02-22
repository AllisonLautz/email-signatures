
/*  

issue w/args[1]->isString() failed?

>> run npm i natives

issue w/ gulp-sass?

>> run npm install node-sass gulp-sass --save-dev


*/


var gulp = require('gulp');


var sass = require('gulp-sass');

var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var autoPrefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');

var rename = require('gulp-rename');
var runSequence = require('run-sequence');







function sync(){
  return browserSync.init({
    proxy: 'localhost/custom-plugins/signatures',
    open: 'external'
  });
}



function js(){
  return gulp.src('libs/**/[^_]*.js')
  // .pipe(babel())
  .pipe(uglify()).on('error', function(e){console.log(e);})
  .pipe(rename({suffix: '.min'}))
  .pipe(gulp.dest('min'))
  .pipe(browserSync.stream());
  console.log('js')
  sync();
}





function svg(){
  return gulp.src('imgs/svg/**.svg')
  .pipe(svgSprite(config))
  .pipe(gulp.dest('imgs'));
}






function css(){
  return gulp.src('sass/**/*.scss')
  .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
  .pipe(autoPrefixer({
    browsers: ['> 1%', 'last 2 versions']
  }))
  .pipe(rename({suffix: '.min'}))
  .pipe(gulp.dest('styles'))
  .pipe(browserSync.stream());
  sync();
}


gulp.task('default', function(){

  sync();


  gulp.watch('sass/**/*.scss')
  .on('change', function(path, stats) {
    console.log('changed (s)css');
    css();
  })



  gulp.watch('libs/**/*.js')
  .on('change', function(path, stats) {
    console.log('changed js');
    js();
    // sync();
    // runSequence('js', browserSync.reload);
  })


});