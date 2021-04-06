@extends('twill::layouts.settings')

@section('contentFields')
    @formField('input', [
        'translated' => true,
        'label' => 'Site title',
        'name' => 'site_title',
        'textLimit' => '80'
    ])

    @formField('input', [
        'translated' => true,
        'label' => 'Home text',
        'name' => 'home_text',
        'textLimit' => '80'
    ])

    @formField('input', [
        'translated' => true,
        'label' => 'Site Desc',
        'name' => 'site_desc',
        'textLimit' => '150'
    ])

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Seo image',
        'note' => 'Also used in listings',
        'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('medias', [
        'name' => 'logo',
        'label' => 'Site Logo',
        'note' => 'Also used in listings',
        'fieldNote' => 'Minimum image width: 1500px'
    ])
@stop
