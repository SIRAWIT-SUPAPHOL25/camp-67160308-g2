<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Result-Workshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <div class="card shadow mt-5">
                <div class="card-body">

                    <h3 class="text-center mb-4">
                        ผลลัพธ์ข้อมูลจากฟอร์ม
                    </h3>

                    <table class="table table-bordered">
                        <tr>
                            <th width="35%">ชื่อ</th>
                            <td>{{ $data['fname'] }}</td>
                        </tr>
                        <tr>
                            <th>สกุล</th>
                            <td>{{ $data['lname'] }}</td>
                        </tr>
                        <tr>
                            <th>วันเดือนปีเกิด</th>
                            <td>{{ $data['bdate'] }}</td>
                        </tr>
                        <tr>
                            <th>อายุ</th>
                            <td>{{ $data['age'] }}</td>
                        </tr>
                        <tr>
                            <th>เพศ</th>
                            <td>{{ $data['gender'] }}</td>
                        </tr>
                        <tr>
                            <th>ที่อยู่</th>
                            <td>{{ $data['address'] }}</td>
                        </tr>
                        <tr>
                            <th>สีที่ชอบ</th>
                            <td>
                                <span style="display:inline-block;
                                    width:40px;
                                    height:20px;
                                    background:{{ $data['favcolor'] }}">
                                </span>
                                {{ $data['favcolor'] }}
                            </td>
                        </tr>
                        <tr>
                            <th>แนวเพลงที่ชอบ</th>
                            <td>
                                {{ implode(', ', $data['music'] ?? []) }}
                            </td>
                        </tr>
                        <tr>
                            <th>ยินยอม</th>
                            <td>
                                {{ isset($data['agree']) ? 'ยินยอม' : 'ไม่ยินยอม' }}
                            </td>
                        </tr>
                    </table>

                    <div class="text-center">
                        <a href="{{ url('/workshop-form') }}" class="btn btn-secondary">
                            กลับไปหน้าฟอร์ม
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
