@extends('endUser.layouts.includes.master')
@section('content')
<section class="categories">
    <div class="container">
        <div class="row mb-3 justify-content-between">
            <div class="col-md-4">
                <h2>Genres Books</h2>
            </div>
            <div class="col-md-4">
                <hr>
            </div>
            <div class="col-md-4 text-end"><a href="#" class="btn btn-danger">View All</a></div>
        </div>
        <div class="row">
            <div class="swiper mySwiper mySwiper3">
                <div class="swiper-wrapper">
                    @foreach ($categories as $key => $category)
                        <div class="swiper-slide">
                            <div class="category_box position-relative">
                                <a href="{{ route('sub_category.index', $category->id) }}" class="text-decoration-none">
                                <div class="box_content">
                                    <div class="category_img">
                                        <img src="{{ asset('/public/' . Storage::url($category->photo)) }}"
                                            alt="">
                                    </div>
                                    <h4 class="category_title position-absolute">{{ $category->name }}</h4>
                                </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
</section>
@endsection
