<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        span{
            display: block;
        }
    </style>
</head>
<body>
    <h1>Tin tức về {{ $data->title }}</h1>
    <span>Ngày đăng: {{ $data->date }}</span>
    <span>Lượt xem : {{ $data->view }}</span>
    <span>Thể loại : {{ $data->category_name }}</span>
    <p>{{ $data->description }}</p>
</body>
</html>