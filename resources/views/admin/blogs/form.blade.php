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
        ],
        'placeholder' => 'Content Text',
        'maxlength' => 200,
        'editSource' => true,
        'note' => 'Hint message`',
    ])

    @formField('files', [
    'name' => 'pdf_file',
    'label' => 'Pdf file',
    'note' => 'Add one file (per language)',
    ])

@stop
