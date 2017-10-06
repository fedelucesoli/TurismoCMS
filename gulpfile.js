var gulp = require('gulp'),
    less = require('gulp-less'),
    browserSync = require('browser-sync').create(),
    cleanCSS = require('gulp-clean-css'),
    rename = require("gulp-rename"),
    uglify = require('gulp-uglify'),
    connect = require('gulp-connect-php'),
    httpProxy = require('http-proxy');


gulp.task('images', function(cb) {
    gulp.src(['public/img/**/*.png','public/img/**/*.jpg','public/img/**/*.gif','public/img/**/*.jpeg'])
    .pipe(imageop({
        optimizationLevel: 10,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('public/img/')).on('end', cb).on('error', cb);
});


// Compile LESS files from /less into /css
gulp.task('less', function() {
    return gulp.src('resources/assets/less/turismolobos.less')
        .pipe(less())
        .pipe(gulp.dest('public/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});
gulp.task('lessadmin', function() {
    return gulp.src('resources/assets/less/admin.less')
        .pipe(less())
        .pipe(gulp.dest('public/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

// Minify compiled CSS
gulp.task('minify-css', ['less'], function() {
    return gulp.src('public/css/turismolobos.css')
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('public/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

// Minify JS
gulp.task('minify-js', function() {
    return gulp.src('resources/assets/js/turismolobos.js')
        .pipe(uglify())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('public/js'))
        .pipe(browserSync.reload({
            stream: true
        }))
});



// Run everything
gulp.task('default', ['less', 'minify-css', 'minify-js']);

gulp.task('connect-sync', function () {
    connect.server({
        port: 8079,
        base: 'public',
        open: false,
        debug: true
    });

    var proxy   = httpProxy.createProxyServer({});
    var reload  = browserSync.reload;

    browserSync.init({
        notify: false,
        port  : 8079,
        server: {
            baseDir   : ['public'],
            middleware: function (req, res, next) {
                var url = req.url;

                if (!url.match(/^\/(styles)\//)) {
                    proxy.web(req, res, { target: 'http://localhost:8079' });
                } else {
                    next();
                }
            }
        }
    });
});




// Dev task with browserSync
gulp.task('dev', ['connect-sync', 'less', 'minify-css', 'minify-js'], function() {
    gulp.watch('resources/assets/less/turismolobos.less', ['less']);
    gulp.watch('resources/assets/less/*.less', ['less']);
    gulp.watch('resources/assets/less/admin.less', ['lessadmin']);
    gulp.watch('public/css/*.css', ['minify-css']);
    gulp.watch('resources/assets/js/*.js', ['minify-js']);
    // Reloads the browser whenever HTML or JS files change
    gulp.watch('resources/views/*/*.blade.php', browserSync.reload);
    gulp.watch('resources/views/*/*/*.blade.php', browserSync.reload);
    gulp.watch('resources/views/*.blade.php', browserSync.reload);
});
