@extends('layout')
@section('seo-metas')
    <title>{{$settings->byKey('site_title')}}</title>
    <meta name="description" content="{{$settings->byKey('site_desc')}}"/>
    <meta property="og:url"                content="{{url('/')}}" />
    <meta property="og:title"              content="{{$settings->byKey('site_title')}}" />
    <meta property="og:description"        content="{{$settings->byKey('site_desc')}}" />
    <meta property="og:image"              content="{{ $absoluteUrl . $seoImage }}" />

@stop

@section('body-classes')
    home bg-grey2
    @stop

@section('content')

    <main>
        <div class="container">
            <div class="flex-container hero">
                <div class="col-2-md align-right">
                    <p>
                        {!! $settings->byKey('home_text') !!}
                    </p>
                </div>
            </div>

            <div class="flex-container">
                <div class="col-2-md offset-left">
                    <h2>ΜΟΥΣΙΚΑ ΠΑΡΑΜΥΘΙΑ</h2>
                    <p>
                        Λυρικός Νότος, ένα νέο φεστιβάλ γεμάτο συναυλίες, Μουσικά Παραμύθια, βιβλιοναγνώσεις σε διάλογο με μουσική,
                        μιούζικαλ
                        και ένα πολιτιστικό λεωφορείο με τραγουδιστές και μουσικούς. Λυρικός Νότος: 18, 19 και 20 Ιουνίου 2021 σε πλατείες
                        και
                        τα δημοτικά θέατρα Καλλιθέας, Παλαιού Φαλήρου και Αλίμου, με ελεύθερη είσοδο για το κοινό. Μια συνδιοργάνωση του
                        Συνδέσμου Δήμων Νότιας Αττικής και της Εθνικής Λυρικής Σκηνής.
                    </p>
                </div>
                <div class="col-1-md events">
                    <h3>Προγραμματισμένες εκδηλώσεις:</h3>
                    <ul>
                        <li>
                            <h4>ΟΝΕΙΡΟ ΧΕΙΜΩΝΙΑΤΙΚΗΣ ΗΜΕΡΑΣ</h4>
                            <span>18/19/20.06.2021 - 21:00</span>
                            <span>Άλιμος</span>
                            <span>5o Δημοτικό Σχολείο Αλίμου</span>
                        </li>
                        <li>
                            <h4>ΟΝΕΙΡΟ ΧΕΙΜΩΝΙΑΤΙΚΗΣ ΗΜΕΡΑΣ</h4>
                            <span>18/19/20.06.2021 - 21:00</span>
                            <span>Άλιμος</span>
                            <span>5o Δημοτικό Σχολείο Αλίμου</span>
                        </li>
                        <li>
                            <h4>ΟΝΕΙΡΟ ΧΕΙΜΩΝΙΑΤΙΚΗΣ ΗΜΕΡΑΣ</h4>
                            <span>18/19/20.06.2021 - 21:00</span>
                            <span>Άλιμος</span>
                            <span>5o Δημοτικό Σχολείο Αλίμου</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex-container equal-cols">
                <div class="column">
                    <h2>ΜΟΥΣΙΚΑ ΠΑΡΑΜΥΘΙΑ</h2>
                    <p>
                        Λυρικός Νότος, ένα νέο φεστιβάλ γεμάτο συναυλίες, Μουσικά Παραμύθια, βιβλιοναγνώσεις σε διάλογο με μουσική,
                        μιούζικαλ
                        και ένα πολιτιστικό λεωφορείο με τραγουδιστές και μουσικούς. Λυρικός Νότος: 18, 19 και 20 Ιουνίου 2021 σε πλατείες
                        και
                        τα δημοτικά θέατρα Καλλιθέας, Παλαιού Φαλήρου και Αλίμου, με ελεύθερη είσοδο για το κοινό. Μια συνδιοργάνωση του
                        Συνδέσμου Δήμων Νότιας Αττικής και της Εθνικής Λυρικής Σκηνής.
                    </p>
                </div>
                <div class="column events">
                    <h3>Προγραμματισμένες εκδηλώσεις:</h3>
                    <ul>
                        <li>
                            <h4>ΟΝΕΙΡΟ ΧΕΙΜΩΝΙΑΤΙΚΗΣ ΗΜΕΡΑΣ</h4>
                            <span>18/19/20.06.2021 - 21:00</span>
                            <span>Άλιμος</span>
                            <span>5o Δημοτικό Σχολείο Αλίμου</span>
                        </li>
                        <li>
                            <h4>ΟΝΕΙΡΟ ΧΕΙΜΩΝΙΑΤΙΚΗΣ ΗΜΕΡΑΣ</h4>
                            <span>18/19/20.06.2021 - 21:00</span>
                            <span>Άλιμος</span>
                            <span>5o Δημοτικό Σχολείο Αλίμου</span>
                        </li>
                        <li>
                            <h4>ΟΝΕΙΡΟ ΧΕΙΜΩΝΙΑΤΙΚΗΣ ΗΜΕΡΑΣ</h4>
                            <span>18/19/20.06.2021 - 21:00</span>
                            <span>Άλιμος</span>
                            <span>5o Δημοτικό Σχολείο Αλίμου</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex-container equal-cols">
                <div class="column">
                    <h2>ΜΟΥΣΙΚΑ ΠΑΡΑΜΥΘΙΑ</h2>
                    <p>
                        Λυρικός Νότος, ένα νέο φεστιβάλ γεμάτο συναυλίες, Μουσικά Παραμύθια, βιβλιοναγνώσεις σε διάλογο με μουσική,
                        μιούζικαλ
                        και ένα πολιτιστικό λεωφορείο με τραγουδιστές και μουσικούς. Λυρικός Νότος: 18, 19 και 20 Ιουνίου 2021 σε πλατείες
                        και
                        τα δημοτικά θέατρα Καλλιθέας, Παλαιού Φαλήρου και Αλίμου, με ελεύθερη είσοδο για το κοινό. Μια συνδιοργάνωση του
                        Συνδέσμου Δήμων Νότιας Αττικής και της Εθνικής Λυρικής Σκηνής.
                    </p>
                </div>
                <div class="column events">
                    <h3>Προγραμματισμένες εκδηλώσεις:</h3>
                    <ul>
                        <li>
                            <h4>ΟΝΕΙΡΟ ΧΕΙΜΩΝΙΑΤΙΚΗΣ ΗΜΕΡΑΣ</h4>
                            <span>18/19/20.06.2021 - 21:00</span>
                            <span>Άλιμος</span>
                            <span>5o Δημοτικό Σχολείο Αλίμου</span>
                        </li>
                        <li>
                            <h4>ΟΝΕΙΡΟ ΧΕΙΜΩΝΙΑΤΙΚΗΣ ΗΜΕΡΑΣ</h4>
                            <span>18/19/20.06.2021 - 21:00</span>
                            <span>Άλιμος</span>
                            <span>5o Δημοτικό Σχολείο Αλίμου</span>
                        </li>
                        <li>
                            <h4>ΟΝΕΙΡΟ ΧΕΙΜΩΝΙΑΤΙΚΗΣ ΗΜΕΡΑΣ</h4>
                            <span>18/19/20.06.2021 - 21:00</span>
                            <span>Άλιμος</span>
                            <span>5o Δημοτικό Σχολείο Αλίμου</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex-container equal-cols">
                <div class="column">
                    <h2>ΜΟΥΣΙΚΑ ΠΑΡΑΜΥΘΙΑ</h2>
                    <p>
                        Λυρικός Νότος, ένα νέο φεστιβάλ γεμάτο συναυλίες, Μουσικά Παραμύθια, βιβλιοναγνώσεις σε διάλογο με μουσική,
                        μιούζικαλ
                        και ένα πολιτιστικό λεωφορείο με τραγουδιστές και μουσικούς. Λυρικός Νότος: 18, 19 και 20 Ιουνίου 2021 σε πλατείες
                        και
                        τα δημοτικά θέατρα Καλλιθέας, Παλαιού Φαλήρου και Αλίμου, με ελεύθερη είσοδο για το κοινό. Μια συνδιοργάνωση του
                        Συνδέσμου Δήμων Νότιας Αττικής και της Εθνικής Λυρικής Σκηνής.
                    </p>
                </div>
                <div class="column events">
                    <h3>Προγραμματισμένες εκδηλώσεις:</h3>
                    <ul>
                        <li>
                            <h4>ΟΝΕΙΡΟ ΧΕΙΜΩΝΙΑΤΙΚΗΣ ΗΜΕΡΑΣ</h4>
                            <span>18/19/20.06.2021 - 21:00</span>
                            <span>Άλιμος</span>
                            <span>5o Δημοτικό Σχολείο Αλίμου</span>
                        </li>
                        <li>
                            <h4>ΟΝΕΙΡΟ ΧΕΙΜΩΝΙΑΤΙΚΗΣ ΗΜΕΡΑΣ</h4>
                            <span>18/19/20.06.2021 - 21:00</span>
                            <span>Άλιμος</span>
                            <span>5o Δημοτικό Σχολείο Αλίμου</span>
                        </li>
                        <li>
                            <h4>ΟΝΕΙΡΟ ΧΕΙΜΩΝΙΑΤΙΚΗΣ ΗΜΕΡΑΣ</h4>
                            <span>18/19/20.06.2021 - 21:00</span>
                            <span>Άλιμος</span>
                            <span>5o Δημοτικό Σχολείο Αλίμου</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>


    @if(! empty($categories) )
        <div id="content" class="site-content">
            <ul class="grid" id="portfolio">
                @dump($categories)
                @foreach($categories  as $key => $category)
                    @php
                        $categoryName = $category['category'];
                        $categoryImage = $category['image'];
                    @endphp

                    @if($key === 0 || $key === 3 )
                        <li class="grid-item element-item animate">
                            <div class="item-wrapper portrait-img-grid">
                                <a  href="category/{{$categoryName}}/events">
                                    <img  class="portrait" src="{{$categoryImage->image($categoryName .'_image','portrait')}}" alt="" />
                                </a>
                                <div class="portfolio-text-holder">
                                    <div class="portfolio-info">
                                        <a class="portfolio-text" href="category/{{$categoryName}}/events">{{ __('custom.'.$categoryName)}}</a>
                                        <p class="portfolio-arrow">
                                            <a href="category/{{$categoryName}}/events">
                                                <img src="images/opta_arrow@2x.png" alt="">
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @else
                        <li class="grid-item element-item animate">
                            <div class="item-wrapper">
                                <a href="category/{{$categoryName}}/events">
                                    <img  src="{{$categoryImage->image($categoryName .'_image','landscape')}}" alt="" />
                                </a>
                                <div class="portfolio-text-holder">
                                    <div class="portfolio-info">
                                        <a class="portfolio-text" href="category/{{$categoryName}}/events">{{ __('custom.'.$categoryName)}}</a>
                                        <p class="portfolio-arrow">
                                            <a href="category/{{$categoryName}}/events">
                                                <img src="images/opta_arrow@2x.png" alt="">
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
            <div class="clear"></div>
        </div>
    @endif
@stop
