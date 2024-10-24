@extends('layout.app')

@section('main-content')
    <div class="container" id="jumbotron">

        <h2 class="my-3">Explore our movie collection</h2>
        <a href="{{ route('movies.index') }}">Go to Movies</a>

    </div>
@endsection
