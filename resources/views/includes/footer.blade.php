<div class="container">
    <div class="column municipals">
        <span>Σύνδεσμος Δήμων Νότιας Αττικής</span>
        @if(! is_null($footerImg1) )
            <img src={{$footerImg1}} alt="">
        @endif
        @if(! is_null($footerImg1) )
            <img src={{$footerImg2}} alt="">
        @endif
        @if(! is_null($footerImg1) )
            <img src={{$footerImg3}} alt="">
        @endif
    </div>
    <div class="column municipal-img">
{{--        @if(! is_null($footerImg1) )--}}
{{--            <img src={{$footerImg1}} alt="">--}}
{{--        @endif--}}
{{--        @if(! is_null($footerImg1) )--}}
{{--            <img src={{$footerImg2}} alt="">--}}
{{--        @endif--}}
{{--        @if(! is_null($footerImg1) )--}}
{{--            <img src={{$footerImg3}} alt="">--}}
{{--        @endif--}}
        @if(! is_null($footerImg4))
            <a href="https://www.espa.gr/el/Pages/Default.aspx" target="_blank">
                <img width="100%" style="height: auto!important;" src={{$footerImg4}} alt="ΕΣΠΑ">
            </a>
        @endif
    </div>
</div>


