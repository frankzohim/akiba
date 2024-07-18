<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backoffice/admin/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backoffice/admin/fonts/Linearicons/Font/demo-files/demo.css')}}">
    <link rel="stylesheet" href="{{ asset('backoffice/admin/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backoffice/admin/plugins/owl-carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('backoffice/admin/plugins/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backoffice/admin/plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backoffice/admin/plugins/apexcharts-bundle/dist/apexcharts.css')}}">
    <link rel="stylesheet" href="{{ asset('backoffice/admin/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('backoffice/admin/css/thumbnail.css')}}">
</head>

<body>
    @include('layouts.backoffice.admin.header')
    @include('layouts.backoffice.admin.aside')
    <div class="ps-site-overlay"></div>
    <main class="ps-main">
       @include('layouts.backoffice.admin.sidebar')
        <div class="ps-main__wrapper">
            @include('layouts.backoffice.admin.topbar')
            
              @yield('content')
            
        </div>
    </main>
    <script src="{{ asset('backoffice/admin/plugins/jquery.min.js')}}"></script>
    <script src="{{ asset('backoffice/admin/plugins/popper.min.js')}}"></script>
    <script src="{{ asset('backoffice/admin/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('backoffice/admin/plugins/jquery.matchHeight-min.js')}}"></script>
    <script src="{{ asset('backoffice/admin/plugins/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('backoffice/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{ asset('backoffice/admin/plugins/apexcharts-bundle/dist/apexcharts.min.js')}}"></script>
    <script src="{{ asset('backoffice/admin/js/chart.js')}}"></script>
    <!-- custom code-->
    <script src="{{ asset('backoffice/admin/js/main.js')}}"></script>
    <script>
        document.getElementById("icon_exit").addEventListener("click", function(event){
            event.preventDefault();
            document.getElementById('logout').submit();

    });
    </script>
</body>

</html>