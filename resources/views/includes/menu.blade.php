<div class="menu">
    <div class="content">
        <div class="ctas">
            <button class="menu-close js-menu-close">
                <img src="{{asset("images/close.svg")}}" alt="Close menu" />
            </button>
            <a class="i18-btn" href="{{ route('lang.switch', 'el') }}">ΕΛ  /</a> <a class="i18-btn" href="{{ route('lang.switch', 'en') }}">ΕΝ</a>
        </div>
        <ul>
            {!! $headerMenu->renderBlocks() !!}
        </ul>
        <ul>
            <li><a href="#" class="bg-color1">ΛΥΡΙΚΟΣ ΝΟΤΟΣ</a></li>
            <ul>
                <li><a href="#" class="bg-color2">ΛΥΡΙΚΟΣ ΝΟΤΟΣ</a></li>
                <li><a href="#" class="bg-color3">ΛΥΡΙΚΟΣ ΝΟΤΟΣ</a></li>
                <li><a href="#" class="bg-color4">ΛΥΡΙΚΟΣ ΝΟΤΟΣ</a></li>
                <li><a href="#" class="bg-color5">ΛΥΡΙΚΟΣ ΝΟΤΟΣ</a></li>
                <li><a href="#" class="bg-color6">ΛΥΡΙΚΟΣ ΝΟΤΟΣ</a></li>
                <li><a href="#" class="bg-color7">ΛΥΡΙΚΟΣ ΝΟΤΟΣ</a></li>
                <ul>
                    <li><a href="#" class="bg-color8">ΛΥΡΙΚΟΣ ΝΟΤΟΣ</a></li>
                    <li><a href="#" class="bg-color9">ΛΥΡΙΚΟΣ ΝΟΤΟΣ</a></li>
                    <li><a href="#" class="bg-color10">ΛΥΡΙΚΟΣ ΝΟΤΟΣ</a></li>
                    <ul>
                        <li><a href="#" class="bg-color11">ΛΥΡΙΚΟΣ ΝΟΤΟΣ</a></li>
                        <li><a href="#" class="bg-color12">ΛΥΡΙΚΟΣ ΝΟΤΟΣ</a></li>
                        <li><a href="#" class="bg-color13">ΛΥΡΙΚΟΣ ΝΟΤΟΣ</a></li>
                    </ul>
                </ul>
            </ul>
        </ul>
    </div>
</div>
