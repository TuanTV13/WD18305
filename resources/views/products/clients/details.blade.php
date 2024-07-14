@extends('components.layout')
@section('title')
    {{ $data->name }}
@endsection

@section('content')
    <div class="container section-title" data-aos="fade-up">
        <p><span>Chi tiết về sản phẩm: {{ $data->name }}</span> <span class="description-title"></span></p>
    </div><!-- End Section Title -->
    <div class="container">

        <span><strong>Name:</strong> {{ $data->name }}</span> <br>
        <span><strong>Lượt xem:</strong> {{ $data->views }}</span> <br>
        <span><strong>Giá:</strong> {{ $data->price_regular }}</span> <br>
        <span><strong>Giá KM:</strong> {{ $data->price_sale }}</span>
        <p>{{ $data->description }}</p>

    </div>
@endsection
