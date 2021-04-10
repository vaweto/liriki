<div class="footer-content content-1140 center-relative">

    <div class="our-position-holder">
        <div class="our-position-left">
            <p class="position-lat">
                @if(! is_null($mainFooterLogo))
                <a href="https://www.nationalopera.gr/" target="_blank"><img class="footer-half-logo" src={{$mainFooterLogo}} alt="Λυρικη-Σκηνη" ></a>
                @endif
            </p>
        </div>
        <div class="our-position-right">
            <p class="position-lng">
                @if(! is_null($footerImg4))
                <a href="https://www.espa.gr/el/Pages/Default.aspx" target="_blank"><img class="footer-half-logo" src={{$footerImg4}} alt="ΕΣΠΑ"></a>
                @endif
            </p>
        </div>
    </div>

    <ul class="copyright-holder">
        <li class="copyright-footer">
            Copyright © {{date_format(now(),'Y')}} {{url('/')}}
        </li>
        <li class="social-footer">

        </li>
    </ul>
</div>
