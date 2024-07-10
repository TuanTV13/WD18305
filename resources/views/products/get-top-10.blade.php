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
    <h1>10 bản ghi đầu </h1>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Trở về</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price_regular</th>
                <th>Price_sale</th>
                <th>Quantity</th>
                <th>Views</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price_regular }}</td>
                    <td>{{ $item->price_sale }}</td>
                    <td>{{ $item->quantity}}</td>
                    <td>{{ $item->views }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
