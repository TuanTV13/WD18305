@extends('components.layout')
@section('title')
    {{ $data->title }}
@endsection

@section('content')
    <div class="container section-title" data-aos="fade-up">
        <p><span>Chi tiết tin tức về: {{ $data->title }}</span> <span class="description-title"></span></p>
    </div><!-- End Section Title -->
    <div class="container">

        <span><strong>Ngày tạo:</strong> {{ $data->date }}</span> <br>
        <span><strong>Lượt xem:</strong> {{ $data->view }}</span> <br>
        <span><strong>Danh mục:</strong> {{ $data->category }}</span>
        <p>{{ $data->description }}</p>

    </div>
@endsection
