var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var del = require('del');
var themeInfo = require('./theme.json');

process.env.DISABLE_NOTIFIER = true;

elixir.config.publicPath = 'assets';

var publicPath = '../../public';
var themePath = publicPath + '/themes/health';
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

    mix.del(['assets/css', 'assets/js']);
    mix.del(themePath+'/**');

    mix.copy('resources/assets/css', 'assets/css')
        .copy('resources/assets/js', 'assets/js')
        .copy('resources/assets/img', 'assets/img')
        .copy('resources/assets/media', 'assets/media')
        .copy('resources/assets/plugins', 'assets/plugins')
        .copy('resources/assets/fonts', 'assets/fonts');

    mix.stylistPublish();

});