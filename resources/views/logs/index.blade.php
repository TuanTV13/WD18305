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
    <h1>Logs
    </h1>
    <a href="{{ route('index') }}" class="btn btn-primary">Trở về trang chủ</a>
    <a href="{{ route('logs.deleteLogs') }}" class="btn btn-primary">xóa tất cả các bản ghi từ bảng logs mà created_at trước ngày 1/1/2020.</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Create_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->created_at }}</td>
            @endforeach
        </tbody>
    </table>
</body>
</html>
