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

 /**F3C12C */
mix.styles(
    [
        "resources/css/plugins/bootstrap.min.css",
        "resources/css/plugins/animate.css",
        "resources/css/plugins/ionicons.min.css",
        "resources/css/plugins/pe-icon-7-stroke.css",
        "resources/css/plugins/fontawesome-all.min.css",
        "resources/css/plugins/justifiedGallery.min.css",
        //"resources/css/plugins/YouTubePopUp.css",
        "resources/css/plugins/slick.css",
        "resources/css/plugins/slick-theme.css",
        "resources/css/plugins/swiper.min.css",
        "resources/css/style.css"
    ],
    "public/css/app.css"
).scripts(
    [
        "resources/js/jquery.js",
        "resources/js/jquery-migrate-3.0.0.min.js",
        "resources/js/plugins.js",
        "resources/js/scripts.js",
    ],
    "public/js/app.js"
);

if (mix.inProduction()) {
    mix.version();
}