<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>Viết truy vấn để tính tổng số lượng quantity của mỗi sản phẩm từ bảng order_items, nhóm theo product_id.
    </h1>
    <a href="{{ route('orderitems.index') }}" class="btn btn-primary">Trở về</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID Product</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->product_id }}</td>
                    <td>{{ $item->total_quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
