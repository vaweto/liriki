<div class="menu">
    <div class="content">
        <div class="ctas">
            <button class="menu-close js-menu-close">
                <img src="{{asset("images/close.svg")}}" alt="Close menu" />
            </button>
            <a class="i18-btn i18-btn-el" href="{{ route('lang.switch', 'el') }}">ΕΛ  /</a> <a class="i18-btn" href="{{ route('lang.switch', 'en') }}">ΕΝ</a>
        </div>
        <ul>
            <li><a href="/" class="bg-color1">{{__('custom.lirikos_notos_upper')}}</a></li>
            @php
                $count = 2
            @endphp
           @foreach($headerMenu->blocks()->get() as $block)

               @if($block->type === 'custom_menu_link')
                   <ul class=" pos-{{$block->position}} menu-block" >
                        <li>
                            <a class="bg-color{{$count}}" href="{{ $block->input('link_url') }}">
                                {{ $strHelper->strtoupper_no_accent($block->translatedInput('text_link')) }}
                            </a>
                            @php
                                $count++
                            @endphp
                        </li>
                   </ul>
               @elseif($block->type === 'single_page_link')
                    @php
                        $pagesIds = $block->browserIds('pages');
                        $pages = app(\App\Models\Page::class)->find($pagesIds);
                    @endphp

                    <ul class=" pos-{{$block->position}} menu-block" >
                        @foreach( $pages as $page)
                            <li>
                                <a class="bg-color{{$count}}" href="{{$page->absoluteUrl()}}">
                                    {{ $strHelper->strtoupper_no_accent($page->title) }}
                                </a>
                                @php
                                    $count++
                                @endphp
                            </li>
                        @endforeach
                    </ul>
               @elseif($block->type === 'events_menu')
                    @php
                        $categories = \App\Models\Category::CATEGORY_LIST;
                    @endphp

                    <ul class=" pos-{{$block->position}} menu-block" >
                        @foreach($categories as $category)
                            <li>
                                <a class="bg-color{{$count}}" href="/category/{{$category}}/events">
                                    {{ $strHelper->strtoupper_no_accent(__('custom.' . $category)) }}
                                </a>
                                @php
                                    $count++
                                @endphp
                            </li>
                        @endforeach
                    </ul>
               @elseif($block->type === 'placemarks_menu')
                    @php
                        $placemarks = new \App\Models\Placemark();
                        $placemarks = (new \App\Repositories\PlacemarkRepository($placemarks) )->all();
                    @endphp
                    <ul class=" pos-{{$block->position}} menu-block" >
                            @foreach( $placemarks as $placemark)
                                <li>
                                    <a class="bg-color{{$count}}" href="{{$placemark->absoluteUrl()}}">
                                        {{ $strHelper->strtoupper_no_accent($placemark->title) }}
                                    </a>
                                    @php
                                        $count++
                                    @endphp
                                </li>
                            @endforeach
                        </ul>
               @elseif($block->type === 'events_program_per_year')
                        <ul class=" pos-{{$block->position}} menu-block" >
                            <li>
                                <a class="bg-color{{$count}}" href="/program/2021">
                                    {{ __('custom.program')}} 2021
                                </a>
                                @php
                                  $count++
                                @endphp
                            </li>
                            <li>
                                <a class="bg-color{{$count}}" href="/program/2022">
                                    {{__('custom.program')}} 2022
                                </a>
                                @php
                                    $count++
                                @endphp
                            </li>
                            <li>
                                <a class="bg-color{{$count}}" href="/program/2023">
                                    {{__('custom.program')}} 2023
                                </a>
                                @php
                                    $count++
                                @endphp
                            </li>
                        </ul>

               @endif


            @endforeach

        </ul>
    </div>
</div>
