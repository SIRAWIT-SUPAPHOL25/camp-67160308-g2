@extends('template.default')

@section('header1', 'Flight Data')
@section('content')
    <div class="row">
        <div class="mt-3 col-12">
            <form action="/flight" method="post">
                @csrf
                <div class="col-12">
                <label for="name">Name</label>
                <input class="form-control" name="name" id="name">
                </div>
                <div>
            </form>
        </div>
@endsection
