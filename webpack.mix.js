const mix = require('laravel-mix')
const { CleanWebpackPlugin } = require('clean-webpack-plugin')

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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/admin/admin.js', 'public/js/admin')
    .sass('resources/css/admin/admin.scss', 'public/css/admin.css')
    .sass('resources/css/app.scss', 'public/css', [
        //
    ])

/*
 |--------------------------------------------------------------------------
 | Plugins
 |--------------------------------------------------------------------------
 */

/*
Live reload não está funcionando. Ainda não foi adicionado um patch
https://github.com/statianzo/webpack-livereload-plugin/issues/63

const LiveReloadPlugin = require('webpack-livereload-plugin')
 */

mix.webpackConfig({
    plugins: [
        //new LiveReloadPlugin(),

        new CleanWebpackPlugin({
            cleanOnceBeforeBuildPatterns: [
                'js/*',
                '!js/item.js',
                '!static-files*',
            ],
        }),
    ],

    output: {
        chunkFilename: 'js/chunks/[chunkhash].js',
    },
})
