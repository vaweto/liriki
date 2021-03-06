@extends('twill::layouts.settings')

@section('contentFields')
    @formField('input', [
        'translated' => true,
        'label' => 'Site title',
        'name' => 'site_title',
        'textLimit' => '80'
    ])


    @formField('wysiwyg', [
        'translated' => true,
        'name' => 'home_text',
        'label' => 'Home text',
        'toolbarOptions' => ['list-ordered', 'list-unordered','link',],
        'placeholder' => 'Case study text',
        'maxlength' => 200,
        'note' => 'Hint message',
    ])

    @formField('wysiwyg', [
        'translated' => true,
        'label' => 'sub text',
        'name' => 'sub_text',
        'toolbarOptions' => ['list-ordered', 'list-unordered','link',],
        'placeholder' => 'Case study text',
        'maxlength' => 200,
        'note' => 'Hint message',
    ])

    @formField('wysiwyg', [
        'translated' => true,
        'name' => 'menu_text',
        'label' => 'Inside Menu text',
        'toolbarOptions' => ['list-ordered', 'list-unordered','link',],
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
    <hr>
    <br>
    <h1 style="font-size: 36px">Footer Settings</h1>

    @formField('medias', [
        'name' => 'main_footer_logo',
        'label' => 'Main Footer Logo',
        'note' => 'Also used in listings',
        'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('medias', [
        'name' => 'footer_logo',
        'label' => 'Footer Logo 1',
        'note' => 'Also used in listings',
        'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('medias', [
        'name' => 'footer_logo_2',
        'label' => 'Footer Logo 2',
        'note' => 'Also used in listings',
        'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('medias', [
        'name' => 'footer_logo_3',
        'label' => 'Footer Logo 3',
        'note' => 'Also used in listings',
        'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('medias', [
        'name' => 'footer_logo_4',
        'label' => 'Footer Logo 4',
        'note' => 'Also used in listings',
        'fieldNote' => 'Minimum image width: 1500px'
    ])

    <hr>
    <br>
    <h1 style="font-size: 36px">Home Category Section</h1>
    <p> ???????? ???????????? upload ?????? ???????????? ?????????????????????? ?????? ???????? ???????????? ???????????? ?? ?????????????????? ????????????????.</p>

    <h2>?????????????? ??????????????????</h2>

    @formField('medias', [
    'name' => 'music_tales_image',
    'label' => '?????????????? ?????????????????? image',
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('wysiwyg', [
    'translated' => true,
    'name' => 'music_tales_text',
    'label' => '?????????????? ??????????????????',
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
    'placeholder' => 'Case study text',
    'maxlength' => 200,
    'note' => 'Hint message',
    'editSource' => true,
    ])

    <h2>???????????????? ??????????????????????</h2>

    @formField('medias', [
    'name' => 'music_events_image',
    'label' => '???????????????? ?????????????????????? image',
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('wysiwyg', [
    'translated' => true,
    'name' => 'music_events_text',
    'label' => '???????????????? ??????????????????????',
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
    'placeholder' => 'Case study text',
    'maxlength' => 200,
    'note' => 'Hint message',
    'editSource' => true,
    ])

    <h2>?????????????? ?????????????????? ??????</h2>

    @formField('medias', [
    'name' => 'big_productions_image',
    'label' => '?????????????? ?????????????????? ?????? image',
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('wysiwyg', [
    'translated' => true,
    'name' => 'big_productions_text',
    'label' => '?????????????? ?????????????????? ??????',
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
    'placeholder' => 'Case study text',
    'maxlength' => 200,
    'note' => 'Hint message',
    'editSource' => true,
    ])

    <h2>Booklover s Point</h2>

    @formField('medias', [
    'name' => 'booklovers_point_image',
    'label' => 'Booklovers Point image',
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('wysiwyg', [
    'translated' => true,
    'name' => 'booklovers_point_text',
    'label' => 'Booklovers Point',
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
    'placeholder' => 'Case study text',
    'maxlength' => 200,
    'note' => 'Hint message',
    'editSource' => true,
    ])

    <h2>?????????????? ??????????????????</h2>

    @formField('medias', [
    'name' => 'cultural_bus_image',
    'label' => '?????????????? ?????????????????? image',
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('wysiwyg', [
    'translated' => true,
    'name' => 'cultural_bus_text',
    'label' => "?????????????? ??????????????????",
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
    'placeholder' => 'Case study text',
    'maxlength' => 200,
    'note' => 'Hint message',
    'editSource' => true,
    ])


@stop
