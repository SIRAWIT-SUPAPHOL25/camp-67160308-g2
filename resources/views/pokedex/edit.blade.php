@extends('template.default')

@section('header1', 'Edit Pokedex')

@section('content')
<form action="/pokedex/{{ $pokedex->id }}/update" method="post">
    @csrf

    <input class="form-control mb-2" name="name" value="{{ $pokedex->name }}">
    <input class="form-control mb-2" name="type" value="{{ $pokedex->type }}">
    <input class="form-control mb-2" name="species" value="{{ $pokedex->species }}">
    <input class="form-control mb-2" name="height" value="{{ $pokedex->height }}">
    <input class="form-control mb-2" name="weight" value="{{ $pokedex->weight }}">
    <input class="form-control mb-2" name="hp" value="{{ $pokedex->hp }}">
    <input class="form-control mb-2" name="attack" value="{{ $pokedex->attack }}">
    <input class="form-control mb-2" name="defense" value="{{ $pokedex->defense }}">
    <input class="form-control mb-2" name="image_url" value="{{ $pokedex->image_url }}">

    <button class="btn btn-primary">อัปเดต</button>
</form>
@endsection
