const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js')
    .styles(['bootstrap.min.css','font-awesome.min.css','main.min.css'])
    .scripts(['app.js','vendor/fastclick.min.js','vendor/bootstrap.min.js','vendor/jquery.jpanelmenu.min.js']);
});
