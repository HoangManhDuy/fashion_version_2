<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Fashion Design</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    {{ Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
    <!-- Font Awesome -->
    {{ Html::style('bower_components/font-awesome/css/font-awesome.min.css') }}
    <!-- Ionicons -->
    {{ Html::style('bower_components/Ionicons/css/ionicons.min.css') }}
    <!-- jvectormap -->
    {{ Html::style('bower_components/jvectormap/jquery-jvectormap.css') }}
    <!-- Theme style -->
    {{ Html::style('bower_components/admin-lte/dist/css/AdminLTE.min.css') }}
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    {{ Html::style('bower_components/admin-lte/dist/css/skins/_all-skins.min.css') }}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {{ Html::script('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}
    {{ Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @yield('css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('admin.layouts.library.header')
        @yield('content')
        @include('admin.layouts.library.footer')
    </div>
    <!-- ./wrapper -->
</body>
    <!-- jQuery 3 -->
    {{ Html::script('bower_components/jquery/dist/jquery.min.js') }}
    <!-- Bootstrap 3.3.7 -->
    {{ Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
    <!-- FastClick -->
    {{ Html::script('bower_components/fastclick/lib/fastclick.js') }}
    <!-- AdminLTE App -->
    {{ Html::script('bower_components/admin-lte/dist/js/adminlte.min.js') }}
    <!-- Sparkline -->
    {{ Html::script('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}
    <!-- jvectormap  -->
    {{ Html::script('bower_components/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}
    {{ Html::script('bower_components/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}
    <!-- SlimScroll -->
    {{ Html::script('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}
    <!-- ChartJS -->
    {{ Html::script('bower_components/Chart.js/Chart.js') }}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{ Html::script('bower_components/admin-lte/dist/js/pages/dashboard2.js') }}
    <!-- AdminLTE for demo purposes -->
    {{ Html::script('bower_components/admin-lte/dist/js/demo.js') }}

    <script>
        $(document).ready(function () {
            $('#logout-1').on('click', function () {
                $('#logout-form').submit();
            });
        });
    </script>
    @yield('js')
</html>
