@extends('endUser.layouts.includes.master')
@section('content')
<section class="bestselling">
    <div class="container">
        <div class="row mb-3 justify-content-between">
            <div class="col-md-4">
                <h2>{{$category->name}} Books</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($books as $key => $book)
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5 bestselling_box">
                <div class="box_content">
                    <img src="{{asset('/public/' . Storage::url($book->img))}}" alt="">
                    <div class="img_data mt-3">
                        <p class="book_name fw-bold">{{$book->name}}</p>
                        <div class="stars">
                            <div><i class="fa-solid fa-star"></i></div>
                            <div><i class="fa-solid fa-star"></i></div>
                            <div><i class="fa-solid fa-star"></i></div>
                            <div><i class="fa-solid fa-star"></i></div>
                            <div><i class="fa-solid fa-star"></i></div>
                        </div>
                        <p class="auther text-black-50">{{$book->auther}}</p>
                        <h4 class="price text-danger">{{$book->categories->name}}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
