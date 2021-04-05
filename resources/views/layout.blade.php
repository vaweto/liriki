<!DOCTYPE HTML>
<html lang="en-US">
<head>
    @include('includes.head')
</head>
<body class="page">

    @include('includes.header')

    <div class="doc-loader"></div>

    @yield('content')

    <!--Footer-->

    <footer class="footer">
        @include('includes.footer')
    </footer>

    <script type='text/javascript' src={{asset("js/jquery.min.js")}}></script>
    <script type='text/javascript' src={{asset("js/jquery.fitvids.js")}}></script>
    <script type='text/javascript' src={{asset('js/jquery.smartmenus.min.js')}}></script>
    <script type='text/javascript' src={{asset('js/imagesloaded.pkgd.js')}}></script>
    <script type='text/javascript' src={{asset('js/slick.min.js')}}></script>
    <script type='text/javascript' src={{asset('js/jquery.easing.1.3.js')}}></script>
    <script type='text/javascript' src={{asset('js/main.js')}}></script>
</body>
</html>

