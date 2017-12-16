<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>Fashion Design</title>
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="shortcut icon" href="img/favicon.ico" type="img/x-icon">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    {{ Html::style('bower_components/bootstrap/dist/css/bootstrap.css') }}
    {{ Html::style('bower_components/font-awesome/css/font-awesome.css') }}
    {{ Html::style('bower_components/animate.css/animate.css') }}
    {{ Html::style('css/responsive.css') }}
    {{ Html::style('css/style.css') }}
    @yield('css-customer')

</head>

<body>
    @yield('header')
        @include('layouts.library.header-nav')
    @yield('contend')
        @include('layouts.library.footer-contact')
    @yield('footer')
</body>
    {{ Html::script('bower_components/jquery/dist/jquery.js') }}
    {{ Html::script('bower_components/jquery/dist/jquery.min.js') }}
    {{ Html::script('bower_components/bootstrap/dist/js/bootstrap.js') }}
    {{ Html::script('bower_components/ScrollToFixed/jquery-scrolltofixed.js') }}
    {{ Html::script('bower_components/jquery.easing/js/jquery.easing.js') }}
    {{ Html::script('js/jquery.isotope.js') }}
    {{ Html::script('bower_components/wow/dist/wow.js') }}
    {{ Html::script('bower_components/classie/classie.js') }}
    {{ Html::script('js/contactform/contactform.js') }}
    {{ Html::script('js/customer.js') }}
    @yield('js-customer')
</html>
