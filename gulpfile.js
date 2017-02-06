// include plug-ins
var elixir = require('laravel-elixir');
require('laravel-elixir-remove');

// elixir configuration
elixir.config.notifications = false;
elixir.config.sourcemaps = false;
elixir.config.publicDir = 'public_html';
elixir.config.publicPath = 'public_html';

// elixir task
elixir(function(mix) {
    // start sass
    mix.sass('style.scss', 'public_html/css/style.min.css')
        .sass('partial.scss', 'app/View/Css/partial.min.css');

    // copy partial and process css as blade files for inlining critical css
    //mix.copy('resources/assets/css/partial.min.css', 'resources/views/css/partial.blade.php');

    // concat main scripts
    //mix.scriptsIn('resources/assets/js/concat', 'public_html/js/main.min.js');

    // standalone scripts
    //mix.scripts(['resources/assets/js/standalone/fancybox.js'], 'public_html/js/fancybox.min.js');

    // versioning
    mix.version([
		// css
        'css/style.min.css'

		// concated scripts
        //'js/main.min.js',

		// standalone scripts
        //'js/formUser.min.js'

    ], 'public_html');

    // delete not needed files
    mix
		// css
		.remove('public_html/css/style.min.css')
        //.remove('resources/assets/css/partial.min.css');

		// concated scripts
        //.remove('public_html/js/main.min.js')

		// standalone scripts
        //.remove('public_html/js/formUser.min.js')
        //.remove('public_html/js/pageDashboard.min.js');
});
