<section class="blue-section">
    <ul class="wrapper flex">
        @foreach ($links=config('blue_section_links') as $link)    
            <li>
            <a href="{{$link['url']}}">
                <img src="{{asset('images/' . $link["img"])}}" alt="{{$link['text']}}">
                {{ $link['text']}}
            </a>
        </li>
        @endforeach
    </ul>
</section>