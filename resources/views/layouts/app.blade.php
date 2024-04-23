
<!DOCTYPE html>


<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{ config('app.name', 'NUMENOR') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Open Sans font from Google CDN -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">

    <!-- Para Flash -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Pixel Admin's stylesheets -->
    <link href="{{ asset('assets/stylesheets/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/stylesheets/pixel-admin.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/stylesheets/widgets.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/stylesheets/pages.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/stylesheets/rtl.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/stylesheets/themes.min.css') }}" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="{{ asset('javascripts/ie.min.js') }}"></script>
    <![endif]-->
</head>


<body class="theme-default main-menu-animated">

<script>var init = [];</script>

<div id="main-wrapper">

    @include('layouts.navigation')

    <div id="main-menu" role="navigation">
        <div id="main-menu-inner">
            <div class="menu-content top" id="menu-content-demo">
                <div>
                    <div class="text-bg"><span class="text-slim">Hola,</span> <span class="text-semibold">Carlos Mor.</span></div>

                    <img src="{{ asset('assets/images/user.png') }}" alt="" class="">
                    <div class="btn-group">
                        <a href="{{ route('logout') }}" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></a>
                    </div>
                    <a href="#" class="close">&times;</a>
                </div>
            </div>
            <ul class="navigation">
                <li>
                    <a href="{{ url('listaagencias') }}"><i class="menu-icon fa fa-dribbble"></i><span class="mm-text">Agencias</span></a>
                </li>
                <li>
                    <a href="{{ url('listahoteles') }}"><i class="menu-icon fa fa-dribbble"></i><span class="mm-text">Hoteles</span></a>
                </li>
                <li>
                    <a href="{{ url('listaPagos') }}"><i class="menu-icon fa fa-dribbble"></i><span class="mm-text">Pagos</span></a>
                </li>
                <li>
                    <a href="{{ url('listUser') }}"><i class="menu-icon fa fa-user"></i><span class="mm-text">Usuarios</span></a>
                </li>
            </ul> <!-- / .navigation -->
        </div> <!-- / #main-menu-inner -->
    </div> <!-- / #main-menu -->
    <!-- /4. $MAIN_MENU -->


    <div id="content-wrapper">
        @if (flash()->message)
            <div class="{{ flash()->class }}">
                {{ flash()->message }}
            </div>
        @endif
        @yield('content')
    </div> <!-- / #content-wrapper -->
    <div id="main-menu-bg"></div>
</div> <!-- / #main-wrapper -->

<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.js"></script>

<!-- Pixel Admin's javascripts -->
<script src="{{ asset('assets/javascripts/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/javascripts/pixel-admin.min.js') }}"></script>

<script>
    $('#flash-overlay-modal').modal();
</script>

<script type="text/javascript">
    init.push(function () {
        // Javascript code here
    });
    window.PixelAdmin.start(init);
</script>

</body>
</html>
