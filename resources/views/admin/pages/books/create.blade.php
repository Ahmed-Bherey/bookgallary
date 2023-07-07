@extends('admin.layouts.includes.master')
@section('title')
    اضافة كتاب
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
                                <h3 class="card-title header-title "><i class="fas fa-server ml-2"></i>اضافة كتاب</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            @include('admin.layouts.alerts.success')
                            @include('admin.layouts.alerts.error')
                            <form class="form-horizontal" action="{{ route('book.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row g-4 mb-3">
                                        <div class="col-12 col-md-6 form-floating ">
                                            <select required class="form-control js-example-basic-single" name="category_id"
                                                id="category_id">
                                                <option value="">اختر التصنيف</option>
                                                @foreach ($categories as $key => $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            <label for="category_id" class=" col-form-label">اختر التصنيف
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-6 form-floating">
                                            <input required type="text" placeholder="اسم الكتاب" class="form-control"
                                                id="name" name="name">
                                            <label for="name" class=" col-form-label">اسم الكتاب
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-6 form-floating">
                                            <input required type="text" placeholder="الكاتب" class="form-control"
                                                id="auther" name="auther">
                                            <label for="auther" class=" col-form-label">الكاتب
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-6 form-floating">
                                            <textarea class="form-control" rows="3" id="review" placeholder="قصة الكتاب" name="review"></textarea>
                                            <label for="review" class="col-form-label">قصة الكتاب
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-6 form-floating">
                                            <textarea class="form-control" rows="3" id="notes" placeholder="ملاحظات" name="notes"></textarea>
                                            <label for="notes" class="col-form-label">ملاحظات
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-6 form-floating hidden" hidden>
                                            <input type="file" class="form-control" id="upload_img"
                                                placeholder="صورة الطفل" name="img">
                                            <label for="img" class=" col-form-label">صورة الكتاب
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-6 form-floating">
                                            <div class="heading d-flex" id="btn_img">
                                                <div class="icon"><i class="fa-regular fa-image"></i></div>
                                                <div class="heading_div" id="auther" name="auther">
                                                    تحميل صورة
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 form-floating" hidden>
                                            <input type="file" class="form-control" id="upload_book"
                                                placeholder="رفع الكتاب" name="upload_book">
                                            <label for="upload_book" class=" col-form-label">رفع الكتاب
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-6 form-floating">
                                            <div class="heading d-flex" id="btn_file">
                                                <div class="icon"><i class="fa-regular fa-file"></i></div>
                                                <div class="heading_div" id="auther" name="auther">
                                                    رفع الكتاب
                                                </div>
                                            </div>
                                        </div>
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
                <div class="row mt-1">
                    <div class="col-sm-12 col-lg-12">
                        <div class="card border border-1 mt-3 bg-light">
                            <div class="card-header ">
                                <h3 class="card-title " style="float:right; font-weight:bold;">الكتب</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1"
                                                class="table table-bordered table-striped dataTable dtr-inline"
                                                aria-describedby="example1_info">
                                                <thead>
                                                    <tr>
                                                        <td>#</td>
                                                        <th>تصنيف الكتاب</th>
                                                        <th>اسم الكتاب</th>
                                                        <th>الكاتب</th>
                                                        <th>صورة الكتاب</th>
                                                        <th>عمليات</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($books as $key => $book)
                                                        <tr class="odd">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $book->name }}</td>
                                                            <td>{{ $book->name }}</td>
                                                            <td>{{ $book->name }}</td>
                                                            <td><img src="{{ asset('/public/' . Storage::url($book->img)) }}"
                                                                    alt="" height="50vh"></td>
                                                            <td>
                                                                <a href="{{ route('book.edit', $book->id) }}"
                                                                    type="submit" class="btn bg-secondary"><i
                                                                        class="far fa-edit" aria-hidden="true"></i></a>
                                                                <a href="{{ route('book.destroy', $book->id) }}"
                                                                    type="submit"
                                                                    onclick="return confirm('Are you sure?')"
                                                                    class="btn btn-danger"><i
                                                                        class="fas fa-trash-alt"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <script>
        let btnImg = document.getElementById('btn_img'),
            btnFile = document.getElementById('btn_file'),
            imgFile = document.getElementById('upload_img'),
            bookFile = document.getElementById('upload_book');

        btnImg.addEventListener('click', () => {
            imgFile.click()
        })

        btnFile.addEventListener('click', () => {
            bookFile.click()
        })
    </script>
@endsection
