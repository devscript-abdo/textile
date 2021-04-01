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
        "public/assets/css/bootstrap.min.css",
        "public/assets/css/style.css"
    ],
    "public/build/css/app.css"
);
/*.scripts(
    [
        "resources/js/jquery.js",
        "resources/js/jquery-migrate-3.0.0.min.js",
        "resources/js/plugins.js",
        "resources/js/scripts.js",
    ],
    "public/js/app.js"
);*/

if (mix.inProduction()) {
    mix.version();
}