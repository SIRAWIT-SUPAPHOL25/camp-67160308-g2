<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Workshop #html-form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container pt-5">
    <h2 class="mb-4">Workshop #HTML - FORM</h2>
    <form action="/workshop-form" method="POST" onsubmit="return checkForm();">
        @csrf
        <!-- ชื่อ -->
        <div class="row mb-3">
            <label class="col-4 col-form-label">ชื่อ</label>
            <div class="col-6">
               <input type="text" id="fname" name="fname" class="form-control">
            </div>
        </div>

        <!-- สกุล -->
        <div class="row mb-3">
            <label class="col-4 col-form-label">สกุล</label>
            <div class="col-6">
                <input type="text" id="lname" name="lname" class="form-control">
            </div>
        </div>

        <!-- วันเกิด -->
        <div class="row mb-3">
            <label class="col-4 col-form-label">วันเดือนปีเกิด</label>
            <div class="col-6">
                <input type="date" id="bdate" name="bdate" class="form-control">
            </div>
        </div>

        <!-- อายุ -->
        <div class="row mb-3">
            <label class="col-4 col-form-label">อายุ</label>
            <div class="col-6">
                <input type="number" id="age" name="age" class="form-control">
            </div>
        </div>

        <!-- เพศ -->
        <div class="row mb-3">
            <label class="col-4 col-form-label">เพศ</label>
            <div class="col-6">
                <select id="gender" name="gender" class="form-select">
                    <option value="">-- เลือกเพศ --</option>
                    <option value="male">ชาย</option>
                    <option value="female">หญิง</option>
                    <option value="other">อื่นๆ</option>
                </select>
            </div>
        </div>

        <!-- รูป -->
        <div class="row mb-3">
            <label class="col-4 col-form-label">รูป</label>
            <div class="col-6">
                <input type="file" id="photo" class="form-control">
            </div>
        </div>

        <!-- ที่อยู่ -->
        <div class="row mb-3">
            <label class="col-4 col-form-label">ที่อยู่</label>
            <div class="col-6">
                <textarea id="address" name="address" class="form-control"></textarea>
            </div>
        </div>

        <!-- สีที่ชอบ -->
        <div class="row mb-3">
            <label class="col-4 col-form-label">สีที่ชอบ</label>
            <div class="col-6">
                <input type="color" id="favcolor" name="favcolor" class="form-control form-control-color">
            </div>
        </div>

        <!-- แนวเพลง -->
        <div class="row mb-3">
            <label class="col-4 col-form-label">แนวเพลงที่ชอบ</label>
            <div class="col-6">
                <select id="music" name="music[]" multiple>
                    <option value="pop">Pop</option>
                    <option value="rock">Rock</option>
                    <option value="thai">เพลงไทย</option>
                    <option value="hiphop">Hip-Hop</option>
                </select>
                <small class="text-muted">กด Ctrl เพื่อเลือกหลายรายการ</small>
            </div>
        </div>

        <!-- ยินยอม -->
        <div class="row mb-3">
            <div class="col-4"></div>
            <div class="col-6">
                <input type="checkbox" id="agree" name="agree" value="1">
                <label>ยินยอมตามเงื่อนไข</label>
            </div>
        </div>

        <!-- ปุ่ม -->
        <div class="row">
            <div class="col-4"></div>
            <div class="col-6">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</div>

<script>
function checkForm() {
    if (
        fname.value === "" ||
        lname.value === "" ||
        bdate.value === "" ||
        age.value === "" ||
        gender.value === "" ||
        photo.value === "" ||
        address.value === "" ||
        favcolor.value === "" ||
        music.selectedOptions.length === 0 ||
        !agree.checked
    ) {
        alert("❌ กรุณากรอกข้อมูลให้ครบทุกช่อง");
        return false;
    }

    alert("✅ กรอกข้อมูลครบถ้วน ผ่านการตรวจสอบ");
    return true;
}
</script>

</body>
</html>
