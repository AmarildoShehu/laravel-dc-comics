@extends('layouts.main_templates')

@section('main')
<main>
    <form action="" method="POST">
        <div class="wrapper">
            <div class="row">
                <div class="col">
                    <label for="title">Titolo</label>
                    <input id="title" name="title" type="text" placeholder="Titolo">
                </div>
                <div class="col">
                    <label for="thumb">Immagine</label>
                    <input id="thumb" name="thumb" type="url" placeholder="https://...">
                </div>
                <div class="col">
                    <label for="price">Prezzo</label>
                    <input id="price" name="price" type="text" placeholder="Es: $13.42">
                </div>
                <div class="col">
                    <label for="series">Serie</label>
                    <input id="series" name="series" type="text" placeholder="Serie">
                </div>
                <div class="col">
                    <label for="sale_date">Date di uscita</label>
                    <input id="sale_date" name="sale_date" type="text" placeholder="Data">
                </div>
                <div class="col">
                    <label for="type">Tipologia</label>
                    <input id="type" name="type" type="text" placeholder="Tipologia">
                </div>
                <div class="col">
                    <label for="artists">Artisti</label>
                    <input id="artists" name="artists" type="text" placeholder="Artisti">
                </div>
                <div class="col">
                    <label for="writers">Scrittori</label>
                    <input id="writers" name="writers" type="text" placeholder="Scrittori">
                </div>
                <div class="col-100">
                    <label for="description">Descrizione</label>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Aggiungi descrizione"></textarea>
                </div>                
            </div>
        </div>
    </form>
</main>

@endsection