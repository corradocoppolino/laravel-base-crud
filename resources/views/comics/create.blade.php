@extends('layouts.main')

@section('content')

    <section class="container mt-5">

        <h1>CREA IL TUO FUMETTO</h1>

        <div class="mt-5 mb-5">

            <form action="{{route('fumetti.store')}}" method="post">

                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="title" class="form-label">Nome Supereroe</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Quali sono i suoi poteri?</label>
                    <textarea type="text" id="description" name="description" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Che tipo di fumetto vuoi?</label>
                    <select id="type" name="type" class="form-control">
                        <option value="comic book">comic book</option>
                        <option value="graphic novel">graphic novel</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Inserisci l'immagine di copertina</label>
                    <input type="text" id="image" name="image" class="form-control" placeholder="https://m.media-amazon.com/images/I/61G-wuRkScL.jpg">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Inserisci la data di uscita</label>
                    <input type="text" id="date" name="date" class="form-control" placeholder="2018-10-02">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Inserisci il nome della serie</label>
                    <input type="series" id="series" name="series" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Inserisci il prezzo della serie</label>
                    <input type="price" id="price" name="price" class="form-control">
                </div>

                <button type="submit" class="btn btn-info">INVIA</button>
                <button type="reset" class="btn btn-danger">RESET</button>
                
            </form>

        </div>

    </section>

@endsection