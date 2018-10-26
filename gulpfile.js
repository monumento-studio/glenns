var gulp = require('gulp');
var sass = require('gulp-sass');

sass.compiler = require('node-sass');

var uglify = require('gulp-uglify');
var cssnano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');
var autoprefixer = require('gulp-autoprefixer');
var cache = require('gulp-cache');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();




// Static Server + watching scss/html files
gulp.task('default', ['css', 'javascript', 'imagenes' ], function() {

    browserSync.init({
        server: "./app",

        // Don't show any notifications in the browser.
        notify: false
    });

    gulp.watch("src/js/*.js", ['javascript']).on('change', browserSync.reload);
    gulp.watch("src/sass/**/*.+(scss|sass)", ['css']);
    gulp.watch("app/*.html").on('change', browserSync.reload);
});

gulp.task('javascript', function () {
    gulp.src(['src/js/jquery.min.js', 'src/js/jquery.scrollify.min.js', 'src/js/jquery.smoothState.min.js', 'src/js/parallax.js', 'src/js/app.js' ])
        .pipe(uglify())
        .pipe(concat('functions.js'))
        .pipe(gulp.dest('app/js/dist'))
  });

gulp.task('imagenes', function(){
    gulp.src('src/img/*')
    .pipe(imagemin())
    .pipe(gulp.dest('app/images'))
    }
);



gulp.task('cache:clear', function (callback) {
    return cache.clearAll(callback)
});




gulp.task('css', function(){
    return gulp.src('src/sass/**/*.+(scss|sass)')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(cssnano())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(concat('app.css'))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('app/css'))
        .pipe(browserSync.stream());
});



// gulp.watch('archivo', [tarea]);