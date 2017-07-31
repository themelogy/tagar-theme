var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var del = require('del');
var themeInfo = require('./theme.json');

process.env.DISABLE_NOTIFIER = true;

elixir.config.publicPath = 'assets';

var publicPath = '../../public';
var themePath = publicPath + '/themes/tagar';
var cssPath = themePath + '/css';
var jsPath =  themePath + '/js';

var Task = elixir.Task;

elixir.extend('del', function(path) {
    new Task('del', function() {
        return del(path, {force:true});
    });
});

elixir.extend('stylistPublish', function() {
    new Task('stylistPublish', function() {
        return gulp.src("").pipe(shell("php ../../artisan stylist:publish " + themeInfo.name));
    });
});

elixir(function (mix) {

    mix.sass('style.scss', cssPath + '/style.css')
       .sass('shortcodes/shortcodes.scss', cssPath + '/shortcodes/shortcodes.css')
       .sass('skins/tagar.scss', cssPath + '/skins/tagar.css');

//    mix.del(['assets/css', 'assets/js']);
//    mix.del(themePath+'/**');
//
//    mix.sass('style.scss', 'resources/assets/css/style.css')
//        .sass('shortcodes/shortcodes.scss', 'resources/assets/css/shortcodes/shortcodes.css')
//        .sass('skins/tagar.scss', 'resources/assets/css/skins/tagar.css');
//
//    mix.copy('resources/assets', 'assets');
//
//    mix.stylistPublish();

});