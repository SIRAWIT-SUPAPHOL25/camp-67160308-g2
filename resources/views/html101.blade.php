@extends('template.default')
@section('content')
   <div class="container pt-5">
    <h1>Workshop #HTML - FORM</h1>
    <form>

    <div class="row align-items-center">
    <div class="col-4">
        <label for="inputPassword6" class="col-form-label">
            ชื่อ
        </label>
    </div>
    <div class="col-6">
        <input type="text" id="fname" class="form-control">
    </div>
    </div>
    <div class="row mt-3">
        <div class="col-4">
            <label for="lname">
                นามสกุล
    </label>
    </div>
    <div class="col-6">
        <input type="text" id="fname" class="form-control">
    </div>
    <div class="row mt-3"></div>
        <div class="col-4">
            <label for="bdate">
                วัน/เดือน/ปี
    </label>
    </div>
    <div class="col-6">
        <input type="date" id="bdate" class="form-control">
    </div>
</form>
</div>
@endsection

@push("scripts")
<script>
    console.log("it's work!")
</script>
@endpush