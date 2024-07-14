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
    <h1>Update Product</h1>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Trở về</a>

    <form action="{{ route('products.update', ['id' => $data->id]) }}" method="post">
        @csrf

        @method('PUT')
        <div>
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" value= "{{ $data->name }} "class="form-control">
        </div>
        <div>
            <label for="price_regular" class="form-label">Price_regular</label>
            <input type="text" name="price_regular" value= "{{ $data->price_regular }}" id="price_regular"
                class="form-control">
        </div>
        <div>
            <label for="price_sale" class="form-label">Price_sale</label>
            <input type="text" name="price_sale" value= "{{ $data->price_sale }}" id="price_sale"
                class="form-control">
        </div>
        <div>
            <label for="views" class="form-label">Views</label>
            <input type="text" name="views" value= "{{ $data->views }}" id="views" class="form-control">
        </div>
        <div>
            <label for="quantity" class="form-label">Quantity</label>
            <input type="text" name="quantity" value= "{{ $data->quantity }}" id="quantity" class="form-control">
        </div>
        <div>
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $data->description }}</textarea>
        </div>
        <input type="submit" value="Update Product">
    </form>
</body>

</html>
