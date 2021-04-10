<!DOCTYPE HTML>
<html lang="en-US">
<head>
    @include('includes.head')
</head>
<body class="
    @yield('body-classes')
">

    @include('includes.header')

    <div class="doc-loader">
    </div>

    @yield('content')

    <!--Footer-->
    <div style="background-color: white" class="content-1140 center-relative">

        <div class="external-logos">
            <img src={{$footerImg1}} alt="">
            <img src={{$footerImg2}} alt="">
            <img src={{$footerImg3}} alt="">
        </div>
    </div>
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
    <script type='text/javascript' src={{asset('js/lightbox.js')}}></script>

    <script>
        $('.language').on('show.bs.modal', function (e) {

            $roleID =  $(e.relatedTarget).attr('data-id');

            //ajax call
            $.ajax({
                url: "set_session.php",
                data: { role: $roleID }
            });
        });
    </script>

    @yield('scripts')

</body>
</html>

