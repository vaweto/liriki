@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('block_editor', [
        'blocks' => ['custom_menu_link','menu_with_nested_pages','single_page_link', 'placemarks_menu', 'events_menu', 'events_program_per_year']
    ])
@stop
