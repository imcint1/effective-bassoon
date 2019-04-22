var gulp = require('gulp'); //default
var sass = require('gulp-sass');//sass complie
var concat = require('gulp-concat'); //compile js plugins into one file
var concatCss = require('gulp-concat-css');//compile css plugins into one file
var watch = require('gulp-watch'); //sass compile to css

gulp.task('sass', function () {
    return gulp.src('public/scss/**/*.scss')
            .pipe(sass().on('error', sass.logError))
            .pipe(gulp.dest('public/css/'));
});
gulp.task('watch', function () {
    gulp.watch('public/scss/**/*.scss', ['sass']);
});

gulp.task('concat', function () {
    return gulp.src(
            [
                'public/lib/jquery/dist/jquery.min.js',
                'public/lib/bootstrap/dist/js/bootstrap.bundle.min.js',
                'public/js/pace.min.js',
                'public/js/jquery.easing.min.js',
                'public/lib/metismenu/dist/metisMenu.min.js',
                'public/js/jquery.slimscroll.min.js'
            ])
            .pipe(concat('plugins.js'))
            .pipe(gulp.dest('public/js/plugins/'));
});

gulp.task('concatCss', function () {
    return gulp.src([
        'public/lib/metisMenu/dist/metisMenu.min.css',
        'public/lib/animate/animate.min.css'
    ])
            .pipe(concatCss("plugins/plugins.css"))
            .pipe(gulp.dest('public/css/'));
});