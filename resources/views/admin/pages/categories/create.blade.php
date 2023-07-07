@extends('admin.layouts.includes.master')
@section('title')
    اضافة تصنيف
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
                                <h3 class="card-title header-title "><i class="fas fa-server ml-2"></i>اضافة تصنيف</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            @include('admin.layouts.alerts.success')
                            @include('admin.layouts.alerts.error')
                            <form class="form-horizontal" action="{{ route('category.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row g-4 mb-3">
                                            <div class="col-12 col-md-6 form-floating">
                                                <input required type="text" placeholder="اسم التصنيف"
                                                    class="form-control" id="name_ar" name="name">
                                                <label for="name_ar" class=" col-form-label">اسم التصنيف
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-6 form-floating ">
                                                <input type="file" class="form-control" id="photo"
                                                    placeholder="صورة الطفل" name="photo">
                                                <label for="photo" class=" col-form-label">صورة التصنيف
                                                </label>
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
                                <h3 class="card-title " style="float:right; font-weight:bold;">التصنيفات</h3>
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
                                                        <th>الاسم</th>
                                                        <th>الصورة</th>
                                                        <th class="">عمليات</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($categories as $key => $category)
                                                        <tr class="odd">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $category->name }}</td>
                                                            <td><img src="{{ asset('/public/' . Storage::url($category->photo)) }}"
                                                                    alt="" height="50vh"></td>
                                                            <td>
                                                                <a href="{{ route('category.edit', $category->id) }}"
                                                                    type="submit" class="btn bg-secondary"><i
                                                                        class="far fa-edit" aria-hidden="true"></i></a>
                                                                <a href="{{ route('category.destroy', $category->id) }}"
                                                                    type="submit" onclick="return confirm('Are you sure?')"
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
@endsection
