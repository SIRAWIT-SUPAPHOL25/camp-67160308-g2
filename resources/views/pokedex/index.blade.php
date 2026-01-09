@extends('template.default')

@section('header1', 'Pokedex Data')

@section('content')
<div class="row">
    <div class="mt-3 col-12">
        <form action="/pokedex" method="post">
            @csrf

            <input class="form-control mb-2" name="name" placeholder="Name">
            <input class="form-control mb-2" name="type" placeholder="Type">
            <input class="form-control mb-2" name="species" placeholder="Species">
            <input class="form-control mb-2" name="height" placeholder="Height">
            <input class="form-control mb-2" name="weight" placeholder="Weight">
            <input class="form-control mb-2" name="hp" placeholder="HP">
            <input class="form-control mb-2" name="attack" placeholder="Attack">
            <input class="form-control mb-2" name="defense" placeholder="Defense">
            <input class="form-control mb-2" name="image_url" placeholder="Image URL / Base64">

            <button class="btn btn-success">บันทึก</button>
        </form>
    </div>

    @include('pokedex.table')
</div>
@endsection
