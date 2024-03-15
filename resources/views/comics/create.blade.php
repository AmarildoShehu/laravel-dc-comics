@extends('layouts.main_templates')

@section('main')
<main>
    <form action="{{route('comics.store')}}" method="POST">
        <div class="wrapper">
            @if($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            <div class="row">
                <div class="col">
                    <label for="title">Titolo</label>
                    <input id="title" name="title" type="text" placeholder="Titolo" value="{{old('title','')}}">
                </div>
                <div class="col">
                    <label for="thumb">Immagine</label>
                    <input id="thumb" name="thumb" type="url" placeholder="https://..." value="{{old('thumb','')}}">
                </div>
                <div class="col">
                    <label for="price">Prezzo</label>
                    <input id="price" name="price" type="text" placeholder="Es: $13.42">
                </div>
                <div class="col">
                    <label for="series">Serie</label>
                    <input id="series" name="series" type="text" placeholder="Serie" value="{{old('series','')}}">
                </div>
                <div class="col">
                    <label for="sale_date">Date di uscita</label>
                    <input id="sale_date" name="sale_date" type="date" placeholder="Data" value="{{old('sale_date','')}}">
                </div>
                <div class="col">
                    <label for="type">Tipologia</label>
                    <input id="type" name="type" type="text" placeholder="Tipologia" value="{{old('type','')}}">
                </div>
                <div class="col">
                    <label for="artists">Artisti</label>
                    <input id="artists" name="artists" type="text" placeholder="Artisti">
                </div>
                <div class="col">
                    <label for="writers">Scrittori</label>
                    <input id="writers" name="writers" type="text" placeholder="Scrittori" value="{{old('writers','')}}">
                </div>
                <div class="col-100">
                    <label for="description">Descrizione</label>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Aggiungi descrizione">{{old('description','')}}</textarea>
                </div>                
                </div>                
            </div>
        </div>
        <button type="submit" class="btn btn-more">Invia</button>
    </form>
</main>

@endsection