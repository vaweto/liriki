@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
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
        'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('select', [
        'name' => 'category',
        'label' => 'Category',
        'placeholder' => 'Select an category',
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
            'value' => 'music_bus',
            'label' => 'Μουσικό Λεωφορείο'
            ]
        ]
    ])

    @formField('wysiwyg', [
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

    @formField('tags', [
        'label' => 'Tags',
    ])
@stop
