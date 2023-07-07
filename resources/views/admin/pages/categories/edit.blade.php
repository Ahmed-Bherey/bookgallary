@extends('admin.layouts.includes.master')
@section('title')
    تعديل اضافة تصنيف
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
                                <h3 class="card-title header-title "><i class="fas fa-server ml-2"></i>تعديل اضافة تصنيف</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            @include('admin.layouts.alerts.success')
                            @include('admin.layouts.alerts.error')
                            <form class="form-horizontal" action="{{ route('category.update', $category->id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row g-4 mb-3">
                                        <div class="row g-3">
                                            <div class="col-12 col-md-6 col-lg-4 form-floating">
                                                <input required type="text" placeholder="اسم التصنيف"
                                                    class="form-control" value="{{ $category->name }}" id="name"
                                                    name="name">
                                                <label for="name" class=" col-form-label">اسم التصنيف
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 form-floating">
                                                <input type="file" class="form-control" id="photo"
                                                    placeholder="صورة الطفل" name="photo">
                                                <label for="photo" class=" col-form-label">صورة التصنيف
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 form-floating">
                                                <img src="{{ asset('/public/' . Storage::url($category->photo)) }}"
                                                    alt="" style="max-width: 100%">
                                                </label>
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
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection
