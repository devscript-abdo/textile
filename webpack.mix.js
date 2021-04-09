const mix = require("laravel-mix");
mix.webpackConfig({
    externals: {
        jquery: "jQuery",
    },
});
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

/*mix.styles(
    [
        "public/assets/css/bootstrap.min.css",
        "public/assets/css/style.css"
    ],
    "public/build/css/app.css"
)*/
mix.scripts(
    [
       "public/assets/js/jquery.min.js",
       "public/assets/js/bootstrap.bundle.min.js",
       "public/assets/js/jquery.hoverIntent.min.js",
       "public/assets/js/jquery.waypoints.min.js",
       "public/assets/js/superfish.min.js",
       "public/assets/js/owl.carousel.min.js",
       "public/assets/js/wNumb.js",

       "public/assets/js/jquery.elevateZoom.min.js",
       "public/assets/js/jquery.magnific-popup.min.js",
       "public/assets/js/main.js",
    ],
    "public/build/js/app.js"
);

if (mix.inProduction()) {
    mix.version();
}