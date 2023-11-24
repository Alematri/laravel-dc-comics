@extends("layouts.main")

@section("content")

<h1>Insert new Comic</h1>

<div class="row">
    <div class="col-8">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text" class="form-control" id="title" name="title" >
            </div>
            <div class="mb-3">
                <label for="src" class="form-label">Img</label>
                <input type="text" class="form-control" id="src" name="thumb" >
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Price</label>
                <input type="text" class="form-control" id="type" name="price" >
            </div>
            <div class="mb-3">
                <label for="cooking_time" class="form-label">Series</label>
                <input type="text" class="form-control" id="cooking_time" name="series" >
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Sale Date</label>
                <input type="text" class="form-control" id="weight" name="sale_date" >
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Type</label>
                <input type="text" class="form-control" id="weight" name="type" >
            </div>
            <div class="form-floating mb-5">
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description" style="height: 200px"></textarea>
                <label for="floatingTextarea2">Description</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>

        </form>
    </div>
</div>


@endsection
