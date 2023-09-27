<!doctype html>
<html lang="en">

<head>
<title>Oculux HR | Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="keywords" content="admin template, Oculux admin template, dashboard template, flat admin template, responsive admin template, web app, Light Dark version">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{asset('/dashboard_assets')}}/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('/dashboard_assets')}}/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('/dashboard_assets')}}/vendor/animate-css/vivify.min.css">

<link rel="stylesheet" href="{{asset('/dashboard_assets')}}/vendor/c3/c3.min.css"/>
<link rel="stylesheet" href="{{asset('/dashboard_assets')}}/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="{{asset('/dashboard_assets')}}/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="{{asset('/dashboard_assets')}}/vendor/jvectormap/jquery-jvectormap-2.0.3.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('/dashboard_assets')}}/css/site.min.css">

</head>
<body class="theme-cyan font-montserrat light_version">
<x-partial.loder/>
<x-partial.header/>
  {{$slot}}
<x-partial.sidebar/>
<!-- Javascript -->
<script src="{{asset('/dashboard_assets')}}/bundles/libscripts.bundle.js"></script>
<script src="{{asset('/dashboard_assets')}}/bundles/vendorscripts.bundle.js"></script>

<script src="{{asset('/dashboard_assets')}}/bundles/c3.bundle.js"></script>
<script src="{{asset('/dashboard_assets')}}/bundles/flotscripts.bundle.js"></script>
<script src="{{asset('/dashboard_assets')}}/bundles/jvectormap.bundle.js"></script>
<script src="{{asset('/dashboard_assets')}}/vendor/jvectormap/jquery-jvectormap-us-aea-en.js"></script>

<script src="{{asset('/dashboard_assets')}}/bundles/mainscripts.bundle.js"></script>
<script src="{{asset('/dashboard_assets')}}/js/hrdashboard.js"></script>
</body>
</html>
