@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'translated' => true,
        'name' => 'subtitle',
        'label' => 'Subtitle',
        'maxlength' => 100,
        'required' => true,
        'note' => 'Hint message goes here',
        'placeholder' => 'Subtitle',
    ])

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Cover image',
        'note' => 'Also used in listings',
        'fieldNote' => 'Minimum image width: 1500px',
        'required' => true,
    ])

    @formField('select', [
        'name' => 'category',
        'label' => 'Category',
        'placeholder' => 'Select an category',
    'required' => true,
        'options' => [
            [
                'value' => 'music_tales',
                'label' => 'Μουσικά Παραμύθια'
            ],
            [
                'value' => 'music_events',
                'label' => 'Μουσικές Παραστάσεις'
            ],
            [
                'value' => 'big_productions',
                'label' => 'Μεγάλες Παραγωγές ΕΛΣ'
            ],
            [
                'value' => 'booklovers_point',
                'label' => 'Booklover\'s Point'
            ],
            [
                'value' => 'cultural_bus',
                'label' => 'Πολιτιστικό Λεωφορείο'
            ]
        ]
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
        'maxlength' => 5000,
        'editSource' => true,
        'note' => 'Hint message`',
    ])

    @formField('wysiwyg', [
        'translated' => true,
        'name' => 'factors',
        'label' => 'Συντελεστες',
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
        'maxlength' => 5000,
        'editSource' => true,
        'note' => 'Hint message`',
    ])


    @formField('block_editor', [
        'blocks' => ['event_info']
    ])

    @formField('input', [
        'name' => 'youtube',
        'label' => 'Youtube link',
        'maxlength' => 500,
        'required' => true,
    ])

    @formField('medias', [
        'name' => 'gallery',
        'label' => 'Gallery',
        'max' => 10,
        'note' => 'Minimum image width: 1500px'
    ])

    @formField('files', [
        'name' => 'audio_file',
        'label' => 'Audio file',
        'note' => 'Add one file (per language)',
    ])

    @formField('files', [
        'name' => 'pdf_file',
        'label' => 'Pdf file',
        'note' => 'Add one file (per language)',
    ])
@stop
