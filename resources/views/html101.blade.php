@extends('template.default')
@section('content')
   <div class="container pt-5">
    <h1>Workshop #HTML - FORM</h1>

    <form>

        <!-- ชื่อ -->
        <div class="row align-items-center mt-3">
            <div class="col-4">
                <label for="fname" class="col-form-label">ชื่อ</label>
            </div>
            <div class="col-6">
                <input type="text" id="fname" class="form-control" required>
            </div>
        </div>

        <!-- สกุล -->
        <div class="row align-items-center mt-3">
            <div class="col-4">
                <label for="lname" class="col-form-label">สกุล</label>
            </div>
            <div class="col-6">
                <input type="text" id="lname" class="form-control" required>
            </div>
        </div>

        <!-- วันเดือนปีเกิด -->
        <div class="row align-items-center mt-3">
            <div class="col-4">
                <label for="bdate" class="col-form-label">วัน/เดือน/ปีเกิด</label>
            </div>
            <div class="col-6">
                <input type="date" id="bdate" class="form-control" required>
            </div>
        </div>

        <!-- เพศ -->
        <div class="row align-items-center mt-3">
            <div class="col-4">
                <label class="col-form-label">เพศ</label>
            </div>
            <div class="col-6">
                <select id="gender" class="form-select" required>
                    <option value="">-- เลือกเพศ --</option>
                    <option value="male">ชาย</option>
                    <option value="female">หญิง</option>
                    <option value="other">อื่นๆ</option>
                </select>
            </div>
        </div>

        <!-- รูป -->
        <div class="row align-items-center mt-3">
            <div class="col-4">
                <label for="photo" class="col-form-label">รูป</label>
            </div>
            <div class="col-6">
                <input type="file" id="photo" class="form-control" accept="image/*">
            </div>
        </div>

        <!-- ที่อยู่ -->
        <div class="row align-items-start mt-3">
            <div class="col-4">
                <label for="address" class="col-form-label">ที่อยู่</label>
            </div>
            <div class="col-6">
                <textarea id="address" class="form-control" rows="3"></textarea>
            </div>
        </div>

        <!-- สีที่ชอบ -->
        <div class="row align-items-center mt-3">
            <div class="col-4">
                <label for="favcolor" class="col-form-label">สีที่ชอบ</label>
            </div>
            <div class="col-6">
                <input type="color" id="favcolor" class="form-control form-control-color">
            </div>
        </div>

        <!-- แนวเพลงที่ชอบ -->
        <div class="row align-items-center mt-3">
            <div class="col-4">
                <label for="music" class="col-form-label">แนวเพลงที่ชอบ</label>
            </div>
            <div class="col-6">
                <select id="music" class="form-select" multiple>
                    <option value="pop">Pop</option>
                    <option value="rock">Rock</option>
                    <option value="hiphop">Hip-Hop</option>
                    <option value="rnb">R&B</option>
                    <option value="country">Country</option>
                    <option value="thai">เพลงไทย</option>
                </select>
                <small class="text-muted">กด Ctrl เพื่อเลือกหลายรายการ</small>
            </div>
        </div>

        <!-- ยินยอม -->
        <div class="row mt-3">
            <div class="col-4"></div>
            <div class="col-6">
                <input type="checkbox" id="agree" required>
                <label for="agree">ยินยอมตามเงื่อนไข</label>
            </div>
        </div>

        <!-- ปุ่ม -->
        <div class="row mt-4">
            <div class="col-4"></div>
            <div class="col-6">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">บันทึก</button>
            </div>
        </div>

    </form>
</div>

@endsection

@push("scripts")
<script>
    console.log("it's work!")
</script>
@endpush