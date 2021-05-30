<title>{{$settings->byKey('site_title')}} - {{$model->title}}</title>
<meta name="description" content="{{ \Illuminate\Support\Str::limit(strip_tags($model->content), 100, $end='...') }}"/>
<meta property="og:url"                content="{{$model->absoluteUrl()}}" />
<meta property="og:title"              content="{{$model->title}}" />
<meta property="og:description"        content="{{ \Illuminate\Support\Str::limit(strip_tags($model->content), 100, $end='...') }}" />
<meta property="og:image"              content="{{ $absoluteUrl . $model->socialImage('cover','social') }}" />
