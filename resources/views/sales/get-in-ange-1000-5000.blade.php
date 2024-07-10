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
    <h1>Viết truy vấn để lấy các bản ghi từ bảng sales mà amount nằm trong khoảng từ 1000 đến 5000.</h1>
    <a href="{{ route('sales.index') }}" class="btn btn-primary">Trở về</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->amount }}</td>
            @endforeach
        </tbody>
    </table>
</body>
</html>
