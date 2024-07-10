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
    <h1>Trang chủ</h1>
    <a href="{{ route('users.index') }}" class="btn btn-primary">Users</a>
    <a href="{{ route('products.index') }}" class="btn btn-primary">products</a>
    <a href="{{ route('orders.index') }}" class="btn btn-primary">orders</a>
    <a href="{{ route('customers.index') }}" class="btn btn-primary">customers</a>
    <a href="{{ route('sales.index') }}" class="btn btn-primary">sales</a>
    <a href="{{ route('employees.index') }}" class="btn btn-primary">employees</a>
    <a href="{{ route('orderitems.index') }}" class="btn btn-primary">orderitems</a>
    <a href="{{ route('logs.index') }}" class="btn btn-primary">logs</a>

</body>
</html>