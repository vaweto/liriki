@extends('twill::layouts.form')

@section('contentFields')

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Cover image',
        'note' => 'Also used in listings',
        'fieldNote' => 'Minimum image width: 1500px',
    'required' => true,
    ])

    @formField('wysiwyg', [
        'translated' => true,
        'name' => 'content',
        'label' => 'Content',
        'toolbarOptions' => [
        ['header' => [2, 3, 4, 5, 6, false]],
        'bold',
        'italic',
        'underline',
        'strike',
        ["script" => "super"],
        ["script" => "sub"],
        "blockquote",
        "code-block",
        ['list' => 'ordered'],
        ['list' => 'bullet'],
        ['indent' => '-1'],
        ['indent' => '+1'],
        ["align" => []],
        ["direction" => "rtl"],
        'link',
        "clean",
        'image',
        ],
        'placeholder' => 'Content Text',
        'maxlength' => 200,
        'editSource' => true,
        'note' => 'Hint message`',
    ])

    @formField('block_editor', [
        'blocks' => ['text_translated', 'image', 'text_quote', 'gallery', 'youtube_link']
    ])

@stop
