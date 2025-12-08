@extend('template.default')

@section('content')
<h1>this is my view </h1>
<input type="text" id="myinput" value="input text value"  />
<button onclick="myfunc()" on>ตรวจสอบ</button>
<button onclick="myfunc2()" on>ตรวจสอบ2</button>
<button onclick="myfunc3()" on>ตรวจสอบ3</button>
@endsection

@push('scripts')
<h1>my view 2 naja</h1>
@endpush
@push('scripts')
<h1>my view 3 naja</h1>
@endpush

@push('scripts')
<script>
    
    myvar = 1;
    let myvar2
    console.log(myvar)
    console.log(myvar2)
</script>
    <script>
        myvar2 = "My Var 2"
        myvar2 = 2
        console.log(myvar, myvar2)
    </script>
    <script>
        function myfunc(){
            console.log(document.getElementById('myinput').value)
            document.getElementById('myinput').classlist.add("form-control")
            return
        }
        let myfunc2 = function(){
            console.log('myfunc2 called')
        }
        myfunc3 = () => console.log('myfunc3 called')
        console.log(document.getElementById('myinput').value)
    </script>
@endpush