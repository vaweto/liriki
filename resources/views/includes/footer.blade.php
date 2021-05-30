<div class="container">
    <div class="column">
        @if(! is_null($mainFooterLogo))
            <a href="https://www.nationalopera.gr/" target="_blank"><img  src={{$mainFooterLogo}} alt="Λυρικη-Σκηνη" ></a>
        @endif
    </div>
    <div class="column">
        @if(! is_null($footerImg1) )
            <img src={{$footerImg1}} alt="">
        @endif
        @if(! is_null($footerImg1) )
            <img src={{$footerImg2}} alt="">
        @endif
        @if(! is_null($footerImg1) )
            <img src={{$footerImg3}} alt="">
        @endif
        @if(! is_null($footerImg4))
            <a href="https://www.espa.gr/el/Pages/Default.aspx" target="_blank">
                <img src={{$footerImg4}} alt="ΕΣΠΑ">
            </a>
        @endif
    </div>
</div>
