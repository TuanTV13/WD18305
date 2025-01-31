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
    <h1>Products</h1>
    {{-- <a href="{{ route('index') }}" class="btn btn-primary">Trở về trang chủ</a> --}}
    {{-- <a href="{{ route('products.getTop10') }}" class="btn btn-primary">lấy 10 bản ghi đầu tiên từ bảng products.</a> --}}
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add product</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('delete'))
        <div class="alert alert-success">
            {{ session('delete') }}
        </div>
    @endif


    @if (session('update'))
        <div class="alert alert-success">
            {{ session('update') }}
        </div>
    @endif


    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price_regular</th>
                <th>Price_sale</th>
                <th>Quantity</th>
                <th>Views</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price_regular }}</td>
                    <td>{{ $item->price_sale }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->views }}</td>
                    <td>
                        <a href="{{ route('products.delete', ['id' => $item->id]) }}" class="btn btn_primary"
                            onclick="return confirm('Chắc chắn muốn xóa:');">Delete</a>
                        <a href="{{ route('products.edit', ['id' => $item->id]) }}">Update</a>
                        <a href="{{ route('products.show', ['id' => $item->id]) }}">Details</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
