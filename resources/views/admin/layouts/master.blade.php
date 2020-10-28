<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin-assets/admin/img/favicon.ico')}}">
    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('admin-assets/admin/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('admin-assets/admin/css/font-awesome.min.css')}}">
    <!-- adminpro icon CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('admin-assets/admin/css/adminpro-custon-icon.css')}}">
    <!-- meanmenu icon CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('admin-assets/admin/css/meanmenu.min.css')}}">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('admin-assets/admin/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('admin-assets/admin/css/animate.css')}}">
    <!-- data-table CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('admin-assets/admin/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/admin/css/data-table/bootstrap-editable.css')}}">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('admin-assets/admin/css/normalize.css')}}">
    <!-- charts C3 CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('admin-assets/admin/css/c3.min.css')}}">
    <!-- forms CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('admin-assets/admin/css/form/all-type-forms.css')}}">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('admin-assets/admin/css/style.css')}}">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('admin-assets/admin/css/responsive.css')}}">
    <!-- modernizr JS
    ============================================ -->
    <script src="{{asset('admin-assets/admin/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <style type="text/css">
        .sidebar-header img {
     border-radius: 1%; 
    width: 21%;
}

.materialdesign .left-custom-menu-adp-wrap ul.left-sidebar-menu-pro li a:visited {
    background: linear-gradient(to bottom, #9f5bdc 0%, #fe66cc 100%);
}
.materialdesign .left-custom-menu-adp-wrap ul.left-sidebar-menu-pro li a:visited {
    background: linear-gradient(to bottom, #9f5bdc 0%, #fe66cc 100%);
}



@media only screen and (max-width: 700px) {
  .mean-container .mean-bar {
    z-index: 998!important;
}

}
    </style>
</head>

<body class="materialdesign">
   

        
         @include('admin.layouts.header')
         @include('admin.layouts.sidebar')
         @yield('content')
         @include('admin.layouts.footer')



    <!-- jquery
        ============================================ -->
    <script src="{{asset('admin-assets/admin/js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{asset('admin-assets/admin/js/bootstrap.min.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{asset('admin-assets/admin/js/jquery.meanmenu.js')}}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{asset('admin-assets/admin/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{asset('admin-assets/admin/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('admin-assets/admin/js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{asset('admin-assets/admin/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/counterup/counterup-active.js')}}"></script>
    <!-- peity JS
        ============================================ -->
    <script src="{{asset('admin-assets/admin/js/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/peity/peity-active.js')}}"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="{{asset('admin-assets/admin/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/sparkline/sparkline-active.js')}}"></script>
    <!-- flot JS
        ============================================ -->
    <script src="{{asset('admin-assets/admin/js/flot/Chart.min.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/flot/flot-active.js')}}"></script>
    <!-- map JS
        ============================================ -->
    <script src="{{asset('admin-assets/admin/js/map/raphael.min.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/map/jquery.mapael.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/map/france_departments.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/map/world_countries.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/map/usa_states.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/map/map-active.js')}}"></script>
    <!-- data table JS
        ============================================ -->
    <script src="{{asset('admin-assets/admin/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('admin-assets/admin/js/data-table/bootstrap-table-export.js')}}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{asset('admin-assets/admin/js/main.js')}}"></script>
</body>

</html>
              
            