var gulp = require('gulp');
var gulpless = require('gulp-less');


gulp.task('less', function(){
  gulp.src('less/main.less')
  .pipe(gulpless())
  .pipe(gulp.dest('less'));
});

gulp.task('default', ['less'], function(){
  gulp.watch('less/*.less', ['less']);
});
