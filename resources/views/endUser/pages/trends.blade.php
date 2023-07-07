@extends('endUser.layouts.includes.master')
@section('content')
<section class="trending">
    <div class="container">
        <div class="row mb-3 justify-content-between">
            <div class="col-md-4">
                <h2>What's In Trend</h2>
            </div>
        </div>
        <div class="row">
            <div class="swiper mySwiper mySwiper1">
                <div class="swiper-wrapper">
                    @foreach ($trends as $trend)
                    <div class="swiper-slide">
                        <div class="trending_box d-flex align-items-center">
                            <div class="img me-3">
                                <img src="{{asset('/public/' . Storage::url($trend->img))}}" alt="">
                            </div>
                            <div class="book_info" style="width: 100%">
                                <h3><a href="#" class="title">{{$trend->name}}</a></h3>
                                <div class="stars">
                                    <div><i class="fa-solid fa-star"></i></div>
                                    <div><i class="fa-solid fa-star"></i></div>
                                    <div><i class="fa-solid fa-star"></i></div>
                                    <div><i class="fa-solid fa-star"></i></div>
                                    <div><i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="story">{{$trend->review}}</p>
                                <p class="auther text-black-50">{{$trend->auther}}</p>
                                <h4 class="price text-danger">{{$trend->categories->name}}</h4>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
