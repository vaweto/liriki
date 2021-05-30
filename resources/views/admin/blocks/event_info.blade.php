@formField('date_picker', [
    'name' => 'event_date',
    'label' => 'Event date',
    'minDate' => '2017-09-10 12:00',
    'maxDate' => '2030-12-10 12:00',
    'withTime' => true
])

@formField('input', [
    'name' => 'place',
    'label' => 'place',
    'translated' => true,
    'maxlength' => 200
])
