@php
$date = \Carbon\Carbon::createFromFormat('Y-m-d H:i',$block->input('event_date'));

@endphp
<p class="info-code-content"> {{ $date->format('d-m-Y H:i') }}</p>
