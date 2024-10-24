@extends('layout.app')

@section('main-content')
    <div class="container">

        <ul>
            @forelse ($movies as $movie)
                <li>

                    {{ $movie->title }}

                </li>
            @empty
                <p>Nessun film disponibile</p>
            @endforelse

        </ul>

    </div>
@endsection
