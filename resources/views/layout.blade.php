<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <link rel="preload" href="{{asset("fonts/HelveticaNeue-Medium.woff2")}}" as="font" type="font/woff2" crossorigin>
    @include('includes.head')
    <style>
        @yield('style')
    </style>

</head>
<body class="
    @yield('body-classes')
">
    <div class="content">
        @include('includes.header')



        @yield('content')

        <footer>
            @include('includes.footer')
        </footer>
        @include('includes.menu')

    </div>

    <script type='text/javascript' src="{{asset('js/app.js?v='.filemtime(public_path('js/app.js')))}}"></script>

    @yield('scripts')

</body>
</html>

