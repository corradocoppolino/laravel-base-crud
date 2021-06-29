@extends('layouts.main')

@section('content')

    <section class="container">

        <h1 class="mt-5">{{$fumetto->title}} <span class="badge badge-info">{{$fumetto->series}}</span></h1>

        <div class="row mt-5 mb-5">

            <div class="col-md-3">

                <img src="{{$fumetto->image}}" alt="">

            </div>

            <div class="col-md-9">

                <p> {!! $fumetto->description !!} </p>

            </div>

        </div>
        
    </section>

    <section class="container mb-5">

        <a href="{{ route('fumetti.index') }}" class="btn btn-info"><< BACK</a>

    </section>

@endsection