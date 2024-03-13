<header>
    <div class="wrapper flex">
        <figure>
            <a href="{{route('#')}}"><img src="{{asset('images/dc-logo.png')}}" alt="DC Logo"></a>
        </figure>
        <nav>
            <ul class="flex">
                @foreach ( $links = config('header_links') as $link )
                <li>
                    <a href="{{route($link['url'])}}" class="{{Route::is($link['url'])? 'active' : ''}}">{{$link['text']}}</a>
                </li>                    
                @endforeach
            </ul>
        </nav>
        <form>
            <input type="text" placeholder="Search">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
</header>