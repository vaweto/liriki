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

    @formField('wysiwyg', [
        'translated' => true,
        'label' => 'sub text',
        'name' => 'sub_text',
        'toolbarOptions' => ['list-ordered', 'list-unordered'],
        'placeholder' => 'Case study text',
        'maxlength' => 200,
        'note' => 'Hint message',
    ])

    @formField('wysiwyg', [
        'translated' => true,
        'name' => 'menu_text',
        'label' => 'Inside Menu text',
        'toolbarOptions' => ['list-ordered', 'list-unordered'],
        'placeholder' => 'Case study text',
        'maxlength' => 200,
        'note' => 'Hint message',
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
