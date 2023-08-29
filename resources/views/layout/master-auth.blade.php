<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title','') | Neptune - Multipurpose Bootstrap Admin Template </title>
    <!-- initiate head with meta tags, css and script -->
    @include('include.head')

</head>
<body class="{{ $theme . 'mode' }}" data-base-url="{{url('/')}}">
    <!-- Loader Starts -->
    @include('include.loader')
    <!--  Loader Ends -->

    <!--  Main Container Starts  -->
    @yield('content')
    <!-- Main Container Ends -->

    @stack('plugin-scripts')
</body>
</html>
