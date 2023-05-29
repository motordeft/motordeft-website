const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.copyDirectory('source/_assets/fonts', 'source/assets/build/fonts')
    .js('source/_assets/js/main.js', 'js')
    .js('source/_assets/js/layout.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css/main.css')
    .jigsaw({
        watch: ['config.php', 'source/**/*.md', 'source/**/*.php', 'source/**/*.scss'],
    })
    .options({
        processCssUrls: false,
    })
    .sourceMaps()
    .version();
