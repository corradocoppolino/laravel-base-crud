@extends('layouts.main')

@section('content')

    <h1>COMICS</h1>

    @if (session('deleted'))

        <div class="alert alert-danger" role="alert">
          
            <strong>{{session('deleted')}}</strong> eliminato correttamente

        </div>

    @endif

    <section class="container">

        <table class="table table-dark">
            <thead>
              <tr>
                <th>title</th>
                <th>series</th>
                <th>price</th>
                <th colspan="3">Actions</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($fumettos as $fumetto)
                   
              <tr>
                <td>{{$fumetto->title}}</td>
                <td>{{$fumetto->series}}</td>
                <td>{{$fumetto->price}}</td>
                <td><a href="{{ route('fumetti.show',$fumetto->id) }}" class="btn btn-info">SHOW</a></td>
                <td><a href="{{ route('fumetti.edit',$fumetto) }}" class="btn btn-info">EDIT</a></td>
                <td>
                    <form action="{{ route('fumetti.destroy',$fumetto) }}" method="POST">
                    
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">DELETE</button>


                    </form>
                </td>
              </tr>

              @endforeach 
              
            </tbody>
        </table>

    </section>

    <section class="container">

        {{$fumettos->links()}}

    </section>

@endsection