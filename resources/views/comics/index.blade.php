@extends("layouts.main")

@section("content")

    <h1>Comics for sale</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Type</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td><a href="route {{ "comics.show", ( $comic->id ) }}">Info</a></td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

@endsection
