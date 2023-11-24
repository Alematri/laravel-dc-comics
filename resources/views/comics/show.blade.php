@extends("layouts.main")

@section("content")

    <h1>{{ $comic->title }}</h1>

    <div class="row">
        <div class="col">
            <img class="img-fluid border" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
    </div>
    <div class="row my-5">
        <p>{{ $comic->title }}</p>
        <p>{{ $comic->price }}</p>
        <p>{{ $comic->type }}</p>
        <p>{{ $comic->series }}</p>
        <p>{{ $comic->sale_date }}</p>
    </div>
    <div class="row my-5">
        <p>
            {!! $comic->description !!}
        </p>
    </div>

@endsection
