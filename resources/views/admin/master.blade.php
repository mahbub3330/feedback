<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@yield('title')</title>

    <!-- Core CSS - Include with every page -->
    <link href="{{ asset('/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="{{ asset('/admin/css/plugins/morris/morris-0.4.3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/css/plugins/timeline/timeline.css') }}" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="{{ asset('/admin/css/sb-admin.css') }}" rel="stylesheet">

    <script src="{{ asset('/admin/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/admin/ckeditor/samples/js/sample.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/admin/ckeditor/samples/css/samples.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}">

</head>

<body>
<div id="wrapper">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">

       @include('admin.includes.header')
        <!-- /.navbar-header -->

        <!-- /.navbar-top-links -->
        @include('admin.includes.menu')
           <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row pb-2" >
            <!-- <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div> -->
            <!-- /.col-lg-12 -->
{{--            @yield('body')--}}
            hi hlw
            @yield('body')
        </div>
        <!-- /.row -->

        <!-- /.row -->
        <!-- hello -->
    </div>
    <!-- /#page-wrapper -->

</div>








<!-- /#wrapper -->

<!-- Core Scripts - Include with every page -->
<script src="{{ asset('/admin/js/jquery-1.10.2.js') }}"></script>
<script src="{{ asset('/admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>

<!-- Page-Level Plugin Scripts - Dashboard -->
<script src="{{ asset('/admin/js/plugins/morris/raphael-2.1.0.min.js') }}"></script>
<script src="{{ asset('/admin/js/plugins/morris/morris.js') }}"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src="{{ asset('/admin/js/sb-admin.js') }}"></script>
<script src="{{ asset('/admin/invoice/js/scriptinvoice.js') }}"></script>


<!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
<script src="{{ asset('/admin/js/demo/dashboard-demo.js') }}"></script>
<script>
    initSample();
</script>

</body>

</html>
