const elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

elixir(mix => {
    mix.sass([
            'front/front.scss',
            'font-awesome-4.6.3/scss/font-awesome.scss',
            'sweetalert.css'
        ],
        'public/css/front.css'
    );
    mix.sass([
            'back/back.scss',
            'font-awesome-4.6.3/scss/font-awesome.scss',
            'sweetalert.css'
        ],
        'public/css/back.css'
    );
  
});
elixir(mix => {
    mix.copy('vendor/soerenkroell/composer-slick/slick/fonts', 'public/fonts/slick')
        .copy('vendor/soerenkroell/composer-slick/slick/ajax-loader.gif', 'public/img')
        .sass(['slick-theme.scss',
               'slick.scss'],'vendor/soerenkroell/composer-slick/slick', 'public/css/slick.css')
        .scripts(['slick.js'],'vendor/soerenkroell/composer-slick/slick', 'public/js/slick.js');
});
