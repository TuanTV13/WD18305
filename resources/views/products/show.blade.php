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
    <h1>Details Product {{ $data->name }}</h1>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Trở về</a>

    <table class="table">
        <thead>
            <tr>
                <th>Trường dữ liệu</th>
                <th>Giá trị</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $data->id }}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{ $data->name }}</td>
            </tr>
            <tr>
                <td>Price_regular</td>
                <td>{{ $data->price_regular }}</td>
            </tr>
            <tr>
                <td>Price_sale</td>
                <td>{{ $data->price_sale }}</td>
            </tr>
            <tr>
                <td>Views</td>
                <td>{{ $data->views }}</td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td>{{ $data->quantity }}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{ $data->description }}</td>
            </tr>
        </tbody>
    </table>

    
</body>

</html>
