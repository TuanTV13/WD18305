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
    <h1>Orders</h1>
    <a href="{{ route('index') }}" class="btn btn-primary">Trở về trang chủ</a>
    <a href="{{ route('orders.getCompletedOrTotalOver100') }}" class="btn btn-primary">Lấy bản ghi status là Completed hoặc Total lớn hơn 100</a>
    <a href="{{ route('orders.updateProcessingToShipped') }}" class="btn btn-primary">Update các bản ghi có trạng thái Processing thành Shipped</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->customer_name }}</td>
                    <td>{{ $item->total }}</td>
                    <td>{{ $item->status_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
