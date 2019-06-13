const mix = require('laravel-mix');
require('laravel-mix-tailwind');
let LiveReloadPlugin = require('webpack-livereload-plugin');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
  .extract(['vue', 'jquery'])
  .sass('resources/sass/app.scss', 'public/css')
  .version()
  .copy('node_modules/font-awesome/fonts/*', 'public/fonts/')
  .copy('node_modules/ionicons/dist/fonts/*', 'public/fonts/')
  .copy('node_modules/material-design-iconic-font/dist/fonts/*', 'public/fonts/')
  .copy('node_modules/simple-line-icons/fonts/*', 'public/fonts/')
  .browserSync({
    proxy: 'dcas-l58.test',
    plugins: [
      'bs-console-qrcode',
      'bs-latency',
      'bs-fullscreen-message',
      'bs-console-info',
      'bs-eslint-message']
  })
  .tailwind();

mix.babelConfig({
  plugins: ['@babel/plugin-syntax-dynamic-import'],
});

// // Standard import
// import StandardComponent from './components/ExampleComponent.vue';
//
// // Dynamic import
// const DynamicallyImportedComponent =
//   () => import('./components/ExampleComponent.vue');
//
// const DynamicallyImportedComponent =
//   () => import(/* webpackChunkName: "dynamically-imported-component" */ './components/ExampleComponent.vue');
//
// const routes = [
//   {
//     name: 'dashboard',
//     path: '/dashboard',
//     component:
//       () => import(/* webpackChunkName: "dashboard" */ './pages/Dashboard.vue'),
//   },
// ];

mix.webpackConfig({
  module: {
    rules: [
      {
        test: /\.tsx?$/,
        loader: 'ts-loader',
        options: {appendTsSuffixTo: [/\.vue$/]},
        exclude: /node_modules/,
      },
    ],
  },
  plugins: [
    new LiveReloadPlugin()
  ],
  resolve: {
    extensions: ['*', '.js', '.jsx', '.vue', '.ts', '.tsx'],
  },
});
