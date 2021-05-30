@php
$date = \Carbon\Carbon::createFromFormat('Y-m-d H:i',$block->input('event_date'));

@endphp

<span class="span-brake">{{ $date->format('d-m-Y H:i') }}</span>
<span class="span-brake">{!! $block->translatedInput('place') !!}</span>
<br>
