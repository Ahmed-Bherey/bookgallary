@extends('endUser.layouts.includes.master')
@section('content')
    <section class="sub_book">
        @include('admin.layouts.alerts.success')
        @include('admin.layouts.alerts.error')
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 sub_book_img">
                    <div style="width: 80%">
                        <img src="{{ asset('/public/' . Storage::url($book->img)) }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 sub_book_content flex-column mt-5">
                    <p class="book_name fw-bold text-black mb-3">{{ $book->name }}</p>
                    <p class="story">{{ $book->review }}</p>
                    <div class="stars mb-3">
                        <div><i class="fa-solid fa-star"></i></div>
                        <div><i class="fa-solid fa-star"></i></div>
                        <div><i class="fa-solid fa-star"></i></div>
                        <div><i class="fa-solid fa-star"></i></div>
                        <div><i class="fa-solid fa-star"></i></div>
                    </div>
                    <p class="auther text-black-50 mb-3">{{ $book->auther }}</p>
                    <h4 class="price text-danger mb-3">{{ $book->categories->name }}</h4>
                    <a href="{{ asset('/public/' . Storage::url($book->upload_book)) }}" download="{{ $book->name }}"
                        class="btn btn-success mb-3">تحميل الكتاب</a>
                    <form action="{{ route('book_details.store', $book->id) }}" method="POST">
                        @csrf
                        <div class="comment_area">
                            <textarea class="form-control mb-3" style="min-height: 100px" rows="3" id="review" placeholder="تعليق ..."
                                name="comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark">اضف</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
