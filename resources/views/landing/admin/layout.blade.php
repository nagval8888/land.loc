<!DOCTYPE html>
<html>
<head>
    @include('landing.admin.common.head')
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

    <!-- Header -->
    @yield('header')

    <!-- Left sidebar -->
    @yield('sidebar')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @yield('footer')

    <div class="control-sidebar-bg"></div>
</div>
    @include('landing.admin.common.scripts')
</body>
</html>
