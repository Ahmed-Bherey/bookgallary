@extends('endUser.layouts.includes.master')
@section('content')
    @include('admin.layouts.alerts.success')
    @include('admin.layouts.alerts.error')
    <section class="banner">
        <div class="banner_img">
            <div class="container">
                <div class="banner_content text-center">
                    <h6 class="text-black-50">A SALEFOR THE PAGES</h6>
                    <h1 class="text-white">50% Off Hundreds <br> Of Books</h1>
                    <p class="text-danger fw-bold">Online And In Stores Only</p>
                    <a href="#" class="btn btn-light">Shop Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bestselling">
        <div class="container">
            <div class="row mb-3 justify-content-between">
                <div class="col-md-4">
                    <h2>Bestselling books</h2>
                </div>
                <div class="col-md-4">
                    <hr>
                </div>
                <div class="col-md-4 text-end"><a href="{{ route('books.index') }}" class="btn btn-danger">View All</a>
                </div>
            </div>
            <div class="row">
                @foreach ($books as $key => $book)
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5 bestselling_box">
                        <a href="{{ route('book_details.index', $book->id) }}" class="text-decoration-none">
                            <div class="box_content">
                                <img src="{{ asset('/public/' . Storage::url($book->img)) }}" alt="">
                                <div class="img_data mt-3">
                                    <p class="book_name fw-bold text-black">{{ $book->name }}</p>
                                    <div class="stars">
                                        <div><i class="fa-solid fa-star"></i></div>
                                        <div><i class="fa-solid fa-star"></i></div>
                                        <div><i class="fa-solid fa-star"></i></div>
                                        <div><i class="fa-solid fa-star"></i></div>
                                        <div><i class="fa-solid fa-star"></i></div>
                                    </div>
                                    <p class="auther text-black-50">{{ $book->auther }}</p>
                                    <h4 class="price text-danger">{{ $book->categories->name }}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="trending">
        <div class="container">
            <div class="row mb-3 justify-content-between">
                <div class="col-md-4">
                    <h2>What's In Trend</h2>
                </div>
                <div class="col-md-4">
                    <hr>
                </div>
                <div class="col-md-4 text-end"><a href="{{route('trends.index')}}" class="btn btn-danger">View All</a></div>
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

    <section class="comments">
        <div class="container">
            <div class="comments_content text-center">
                <div class="swiper mySwiper mySwiper2">
                    <div class="swiper-wrapper">
                        @foreach ($comments as $key => $comment)
                            <div class="swiper-slide">
                                <h5 class="mb-5">What people saying</h5>
                                <p class="mb-5">
                                    {{ $comment->comment }}
                                </p>
                                <div class="auther_info">
                                    <span class="auther">{{ $comment->users->name }}</span> /
                                    <span class="address">{{ $comment->users->address }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="categories">
        <div class="container">
            <div class="row mb-3 justify-content-between">
                <div class="col-md-4">
                    <h2>Genres Books</h2>
                </div>
                <div class="col-md-4">
                    <hr>
                </div>
                <div class="col-md-4 text-end"><a href="{{ route('categories.index') }}" class="btn btn-danger">View
                        All</a></div>
            </div>
            <div class="row">
                <div class="swiper mySwiper mySwiper3">
                    <div class="swiper-wrapper">
                        @foreach ($categories as $key => $category)
                            <div class="swiper-slide">
                                <div class="category_box position-relative">
                                    <a href="{{ route('sub_category.index', $category->id) }}"
                                        class="text-decoration-none">
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

    <section class="information">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 books_box">
                    <div class="box_content d-flex align-items-center">
                        <div class="icon">
                            <i class="fa-solid fa-book"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h4 class="count">{{ App\Models\Book::count() }}</h4>
                            <p class="title">Total Boox</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 cart_box">
                    <div class="box_content d-flex align-items-center">
                        <div class="icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h4 class="count">7000</h4>
                            <p class="title">Booxs Solid</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 emoji_box">
                    <div class="box_content d-flex align-items-center">
                        <div class="icon">
                            <i class="fa-regular fa-face-smile"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h4 class="count">97%</h4>
                            <p class="title">Happy Customres</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
