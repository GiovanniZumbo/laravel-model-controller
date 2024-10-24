@extends('layout.app')

@section('main-content')
    <div class="container">

        <div class="row row-cols-4 g-3">
            @forelse ($movies as $movie)
                <div class="col">

                    <div class="card h-100">
                        <div class="card-body">
                            <p> Title: "{{ $movie->title }}" </p>
                            <p> Original title: "{{ $movie->original_title }}" </p>
                            <p> National: {{ $movie->nationality }} </p>
                            <p> Date: {{ $movie->date }} </p>
                            <p> Vote: {{ $movie->vote }} </p>
                        </div>
                    </div>

                </div>
            @empty
                <p>Nessun film disponibile</p>
            @endforelse
        </div>

    </div>
@endsection
