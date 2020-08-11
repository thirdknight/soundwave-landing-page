// Gulp v4

const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

//compile SCSS into CSS
function style() {
    // 1. where is my scss file
    return gulp.src('./scss/**/*.scss')
    // 2. pass that file through sass compiler
    .pipe(sass().on('error', sass.logError))
    // 3. where do I save the compiled CSS
    .pipe(gulp.dest('./css'))
    // 4. stream changes to all browser
    .pipe(browserSync.stream());
}

function watch() {
    browserSync.init({
        server: {
            baseDir: './'
        }
    });
    // gulp watch for scss, browserSync and js, comment what you don't need.
    gulp.watch('./scss/**/*.scss', style); 
    gulp.watch('./*.html').on('change', browserSync.reload);
    // gulp.watch('./js/**/*.js').on('change', browserSync.reload); 
}

exports.style = style;
exports.watch = watch;
