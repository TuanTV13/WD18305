@extends('components.layout')
@section('title')
    Home
@endsection
@section('content')
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <p><span>Sản phẩm</span> <span class="description-title"></span></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @foreach ($data as $item)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <a href="{{ route('products.details', ['id' => $item->id]) }}">{{ $item->name }}</a>
                        </div>
                    </div><!-- End Service Item -->
                @endforeach

            </div>

        </div>

    </section><!-- /Services Section -->
@endsection
