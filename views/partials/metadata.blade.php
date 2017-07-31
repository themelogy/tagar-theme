{!! seo_helper()->render() !!}

<!--  favicon -->
<link rel="shortcut icon" href="{{ Theme::url('img/ico/favicon.png') }}">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ Theme::url('img/ico/apple-touch-icon-144-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ Theme::url('assets/img/ico/apple-touch-icon-114-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ Theme::url('assets/img/ico/apple-touch-icon-72-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" href="{{ Theme::url('assets/img/ico/apple-touch-icon-72-precomposed.png') }}">

<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
{!! Theme::style('fonts/iconfont/material-icons.css') !!}
{!! Theme::style('fonts/font-awesome/css/font-awesome.min.css') !!}
{!! Theme::style('vendor/magnific-popup/magnific-popup.css') !!}
{!! Theme::style('vendor/flexSlider/flexslider.css') !!}
{!! Theme::style('vendor/materialize/css/materialize.min.css') !!}
{!! Theme::style('vendor/bootstrap/css/bootstrap.min.css') !!}
{!! Theme::style('css/shortcodes/shortcodes.css') !!}
{!! Theme::style('css/style.css') !!}
{!! Theme::style('css/skins/tagar.css') !!}
@stack('styles')
@stack('css_inline')

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->