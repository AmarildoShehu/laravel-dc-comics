@extends('layouts.main_templates')

@section('title', $comic['title'])

@section('main')
<main class="comic">
    <section class="cover-section">
        <div class="wrapper">
            <figure >
                <p class="cover-label up-right">COMIC BOOK</p>
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">        
                <p class="cover-label bottom">VIEW GALLERY</p>
            </figure>        
        </div>
    </section>
    <section class="preview">
        <div class="wrapper">            
            <div class="text-section">
                <h2>{{$comic['title']}}</h2>
                <div class="flex">
                    <div class="flex comic-available label-available">
                        <p class="color-light-green">US Price: <span class="color-white">{{$comic['price']}}</span></p>
                        <p class="color-light-green">AVAILABLE</p>
                    </div>
                    <div class="color-white label-available">
                        Check Availability <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                <p class="description">{{$comic['description']}}</p>
            </div>
            <div class="adv">
                <p>ADVERTISEMENT</p>
                <img src="{{asset('images/adv.jpg')}}" alt="">
            </div>
        </div>
    </section>
    <section class="infos">
        <div class="wrapper">
            <div class="talent">
                <h2>Talent</h2>
                <ul>
                    <li class="flex">
                        <div>Art by:</div>
                        <div class="list-people">
                            @foreach ( explode(', ', $comic['artists'])  as  $artist)
                                <a href="#">{{$artist}}</a>, 
                                @if($loop->last)
                                    <a href="#">{{$artist}}</a>
                                @endif
                            @endforeach
                        </div>
                    </li>
                    <li class="flex">
                        <div>Written by:</div>
                        <div class="list-people">
                            @foreach ( explode(', ', $comic['writers']) as  $writer)
                                <a href="#">{{$writer}}</a>, 
                                @if($loop->last)
                                    <a href="#">{{$writer}}</a>
                                @endif
                            @endforeach
                        </div>
                    </li>
                </ul>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <ul>
                    <li class="flex">
                        <div>Series:</div>
                        <div class="list-people">
                            <a href="#">{{$comic['series']}}</a>
                        </div>
                    </li>
                    <li class="flex">
                        <div>U.S. Price:</div>
                        <div class="list-people">
                            {{$comic['price']}}
                        </div>
                    </li>
                    <li class="flex">
                        <div>On Sale Date:</div>
                        <div class="list-people">
                            {{date_format(date_create($comic['sale_date']), "M d Y")}}
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="links">
            <div class="container">
                <ul class="flex">
                    <li><a href="">DIGITAL COMICS <img src="{{asset('images/cta-icons.png')}}" alt="ok"> </a> </li>
                    <li><a href="">SHOP DC <img src="{{asset('images/cta-icons.png')}}" alt="ok"> </a> </li>
                    <li><a href="">COMIC SHOP LOCATOR <img src="{{asset('images/cta-icons.png')}}" alt="ok"> </a> </li>
                    <li><a href="">SUB SCRIPTIONS <img src="{{asset('images/cta-icons.png')}}" alt="ok"> </a> </li>
                </ul>
            </div>

        </div>
    </section>
</main>  
@endsection