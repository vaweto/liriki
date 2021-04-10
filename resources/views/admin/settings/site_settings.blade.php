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
    <p> Οταν κανεις upload μια εικόνα εμφανίζεται και στην αρχικη σελιδα η κατηγορια αυτοματα.</p>

    <h2>Μουσικά Παραμύθια</h2>

    @formField('medias', [
    'name' => 'music_tales_image',
    'label' => 'Μουσικά Παραμύθια image',
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px'
    ])

    <h2>Μουσικές Παραστάσεις</h2>

    @formField('medias', [
    'name' => 'music_events_image',
    'label' => 'Μουσικές Παραστάσεις image',
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px'
    ])

    <h2>Μεγάλες Παραγωγές ΕΛΣ</h2>

    @formField('medias', [
    'name' => 'big_productions_image',
    'label' => 'Μεγάλες Παραγωγές ΕΛΣ image',
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px'
    ])

    <h2>Booklover s Point</h2>

    @formField('medias', [
    'name' => 'booklovers_point_image',
    'label' => "Booklover's Point image",
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px'
    ])

    <h2>Μουσικό Λεωφορείο</h2>

    @formField('medias', [
    'name' => 'music_bus_image',
    'label' => 'Μουσικό Λεωφορείο image',
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px'
    ])


@stop
