@extends('layouts.app')

@section('content')
    <section>
        <h2>Elenco Film</h2>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <h3>{{ $movie->title }}</h3>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
