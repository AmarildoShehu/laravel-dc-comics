@extends('layouts.main_templates')

@section('title','Home')

@section('main')

<main class="comics">    
    <section class="wrapper flex flex-column position-relative">
        <div class="row">
            @foreach ($comics as $comic)               
            <div class="card">
            <a href="{{route('comics.show', $comic->id)}}">
                    <div class="card-img">
                    <img src="{{asset($comic->thumb)}}" alt="{{$comic->series}}">
                    </div>
                    <div class="card-text">{{$comic->series}}</div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="flex gap-20">
            <a href="" class="btn btn-more">LOAD MORE</a>
            <a href="{{route('comics.create')}}" class="btn btn-more">AGGIUNGI FUMETTO</a>
        </div>
        <div class="btn btn-label"> CURRENT SERIES</div>
    </section>
</main>

@include('includes.blue_section')
@endsection