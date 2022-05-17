@extends('layouts.main')

@section('title', ' - Book detail - form')

@section('content')
    <main class="bg-white">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center p-5">

                <form class="row g-3" action="{{route('books.store')}}" method="post">
                    @csrf
                    <div class="col-md-6">
                        <label for="title" class="form-label">Titolo Fumetto</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="col-md-6">
                        <label for="description" class="form-label">Aggiungi una descrizione:</label>
                        <textarea class="form-control" name="description" id="description" cols="500" rows="10" placeholder="...."></textarea>
                    </div>
                    <div class="col-12">
                        <label for="thumb" class="form-label">Aggiugni Immagine Fumetto</label>
                        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="aggiungi immagine">
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                        <label for="price" class="form-label">Aggiungi il prezzo</label>
                        <input type="text" class="form-control w-25" name="price" id="price" placeholder="inserisci il prezzo">
                    </div>
                    <div class="col-md-6">
                        <label for="series" class="form-label">Specifica la Serie</label>
                        <input type="text" class="form-control" name="series" id="series">
                    </div>
                    <div class="col-md-6">
                        <label for="sale_date" class="form-label">Data Pubblicazione</label>
                        <input type="text"  class="form-control" name="sale_date" id="sale_date" placeholder="yyyy-mm-dd">
                    </div>
                    <div class=" col-12 d-flex justify-content-center align-items-center flex-column">
                        <label for="type" class="form-label">Specifica il tipo di fumetto</label>
                        <input type="text" class="form-control w-25" name="type" id="type">
                    </div>
                    <div class="col-12  text-center mt-5">
                        <button type="submit" class="btn btn-primary">Aggiungi fumetto</button>
                    </div>
                </form>
                
            </div>
        </div>
    </main>
@endsection