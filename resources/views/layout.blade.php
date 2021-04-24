<!DOCTYPE HTML>
<html lang="en-US">
<head>
    @include('includes.head')
    <style>
        @yield('style')
    </style>

</head>
<body class="
    @yield('body-classes')
">

    @include('includes.header')

    <div class="doc-loader">
    </div>

    @yield('content')

    <!--Footer-->
    <div  class="content-1140 center-relative">

        <div class="external-logos">
            @if(! is_null($footerImg1) )
                <img src={{$footerImg1}} alt="">
            @endif

            @if(! is_null($footerImg1) )
                <img src={{$footerImg2}} alt="">
            @endif

            @if(! is_null($footerImg1) )
                <img src={{$footerImg3}} alt="">
            @endif



        </div>
    </div>
    <footer class="footer">
        @include('includes.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
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

