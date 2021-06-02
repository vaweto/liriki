@yield('seo-metas')
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="author" content="Lirikos Notos" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



<link rel="shortcut icon" href={{asset("images/favicon.ico")}} />
{{--<link href='https://fonts.googleapis.com/css?family=Open+Sans%7CMontserrat:400,700%7CRoboto:300,300i,400,400i,700,700i' rel='stylesheet' type='text/css'>--}}
<link href="{{asset('css/custom.css?v='.filemtime(public_path('css/custom.css')))}}" rel="stylesheet">
<link href={{asset('css/app.css?v='.filemtime(public_path('css/app.css')))}} rel="stylesheet">



<!--[if lt IE 9]>
<script src={{asset("js/html5.js")}}></script>
<script src={{asset("js/respond.min.js")}}></script>
    <![endif]-->


