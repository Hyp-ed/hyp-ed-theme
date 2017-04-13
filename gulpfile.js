var gulp = require('gulp'),  
    less = require('gulp-less'),
    sourcemaps = require('gulp-sourcemaps'),
    LessAutoprefix = require('less-plugin-autoprefix'),
    autoprefix = new LessAutoprefix({ browsers: ['last 2 versions'] }),
    jshint = require('gulp-jshint');
    
gulp.task('less', function () {  
    return gulp
        .src('./less/style.less')
        .pipe(sourcemaps.init())
        .pipe(less({
            plugins: [autoprefix]
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./'));
});

gulp.task('jshint', function () {  
    return gulp
        .src('./scripts/*.js')
        .pipe(jshint({
            'esversion': 6
        }))
        .pipe(jshint.reporter('default'));
});

gulp.task('watch', function () {  
    gulp.watch('./less/**/*.less', ['less'])
        .on('change', function(event) {
            console.log(`Watch: ${event.path} was ${event.type}.`);
        });
    gulp.watch('./scripts/*.js', ['jshint'])  
        .on('change', function (event) {
            console.log(`Watch: ${event.path} was ${event.type}.`);
        });    
});

gulp.task('default', ['watch']);