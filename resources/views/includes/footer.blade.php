<footer>
    <section id="footer-top" class="wrapper">
            <div class="row">
            @foreach ($menus=config('footer_menu') as $menu)                    
            <div class="col">
                <h4>{{ $menu['title'] }}</h4>
                <ul>
                    @foreach ($menu['links'] as $link)                            
                    <li>
                        <a href="{{$link['href']}}">{{ $link['text'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
        <p>All Site Content TM and C 2020 DC Entertainment, unless otherwis <a href="">noted here</a>. All rights reserved.</p>
        <span><a href="">Cookies Settings</a></span>
    </section>
    <section id="footer-bottom">
        <nav class="wrapper flex">
            <div id="footer-bottom-nav-left">
                <a href="#" class="btn btn-signup">SIGN-UP NOW!</a>
            </div>
            <div id="footer-bottom-nav-right">
                <ul>
                    <li><a href="#" class="follow-btn">FOLLOW US</a></li>
                    @foreach ($icons=config('footer_icons') as $icon)
                    <li>
                        <a href="{{$icon['href']}}"><img src="{{asset('images/' . $icon['img'])}}" alt="{{$icon['name']}}"></a>
                    </li>                            
                    @endforeach
                </ul>
            </div>
        </nav>
    </section>

</footer>