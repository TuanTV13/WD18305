<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách Users </h1>
    <a href="{{ route('index') }}" class="btn btn-primary">Trở về trang chủ</a>
    <a href="{{ route('users.getOver25') }}" class="btn btn-primary">users mà cột age lớn hơn 25</a>
    <a href="{{ route('users.getActiveOver25') }}" class="btn btn-primary">users mà cột age lớn hơn 25 và status bằng 'active'</a>
    <a href="{{ route('users.getAgeDown') }}" class="btn btn-primary">users, sắp xếp theo age giảm dần</a>
    <a href="{{ route('users.getWithBirthday') }}" class="btn btn-primary">users mà tháng sinh (birth_date) là tháng 5.
    </a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Birthday</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->birthday }}</td>
                    <td>{{ $item->status_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
