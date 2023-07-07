@extends('admin.layouts.includes.master')
@section('title')
    تعديل اضافة كتاب
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <!-- Main content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header header-bg mb-3">
                                <h3 class="card-title header-title "><i class="fas fa-server ml-2"></i>تعديل اضافة كتاب</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            @include('admin.layouts.alerts.success')
                            @include('admin.layouts.alerts.error')
                            <form class="form-horizontal" action="{{ route('book.update', $book->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row g-4 mb-3">
                                        <div class="col-9 row">
                                            <div class="col-12 form-floating mb-3">
                                                <select required class="form-control js-example-basic-single"
                                                    name="category_id" id="category_id">
                                                    <option value="">اختر التصنيف</option>
                                                    @foreach ($categories as $key => $category)
                                                        <option value="{{ $category->id }}"
                                                            @if ($book->category_id == $category->id) selected @endif>
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="category_id" class=" col-form-label">اختر التصنيف
                                                </label>
                                            </div>
                                            <div class="col-12 form-floating mb-3">
                                                <input required type="text" value="{{ $book->name }}"
                                                    placeholder="اسم الكتاب" class="form-control" id="name"
                                                    name="name">
                                                <label for="name" class=" col-form-label">اسم الكتاب
                                                </label>
                                            </div>
                                            <div class="col-12 form-floating mb-3">
                                                <input required type="text" value="{{ $book->auther }}"
                                                    placeholder="الكاتب" class="form-control" id="auther" name="auther">
                                                <label for="auther" class=" col-form-label">الكاتب
                                                </label>
                                            </div>
                                            <div class="col-12 form-floating mb-3">
                                                <textarea class="form-control" value="{{ $book->review }}" rows="3" id="review" placeholder="قصة الكتاب"
                                                    name="review">{{ $book->review }}</textarea>
                                                <label for="review" class="col-form-label">قصة الكتاب
                                                </label>
                                            </div>
                                            <div class="col-12 form-floating mb-3">
                                                <textarea class="form-control" rows="3" id="notes" placeholder="ملاحظات" name="notes">{{ $book->notes }}</textarea>
                                                <label for="notes" class="col-form-label">ملاحظات
                                                </label>
                                            </div>
                                            <div class="col-12 form-floating mb-3">
                                                <input type="file" class="form-control" id="img"
                                                    placeholder="صورة الطفل" name="img">
                                                <label for="img" class=" col-form-label">صورة الكتاب
                                                </label>
                                            </div>
                                            <div class="col-12 form-floating mb-3">
                                                <input type="file" class="form-control" id="upload_book"
                                                    placeholder="رفع الكتاب" name="upload_book">
                                                <label for="upload_book" class=" col-form-label">رفع الكتاب
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <img src="{{ asset('/public/' . Storage::url($book->img)) }}" alt=""
                                                style="max-width: 70%; text-align: left">
                                        </div>
                                        <a href="{{ asset('/public/' . Storage::url($book->upload_book)) }}" download="{{$book->name}}">تحميل الكتاب</a>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn bg-success-2 mr-3">
                                            <i class="fa fa-check text-light" aria-hidden="true"></i>
                                        </button>
                                        <button type="reset" class="btn bg-secondary">
                                            <i class="fas fa-undo"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection
