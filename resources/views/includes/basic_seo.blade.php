<title>{{$settings->byKey('site_title')}} - {{$model->title}}</title>
<meta name="description" content="{{substr(strip_tags($model->content),100)}}"/>
<meta property="og:url"                content="{{$model->absoluteUrl()}}" />
<meta property="og:title"              content="{{$model->title}}" />
<meta property="og:description"        content="{{substr(strip_tags($model->content),100)}}" />
<meta property="og:image"              content="{{ $absoluteUrl . $model->socialImage('cover','social') }}" />
