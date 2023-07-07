@extends('admin.layouts.includes.master')
@section('title')
    بيانات المؤسسة
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
                            <div class="card-header header-bg">
                                <h3 class="card-title header-title "><i class="fas fa-server  ml-2"></i>بيانات المؤسسة</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            @include('admin.layouts.alerts.success')
                            @include('admin.layouts.alerts.error')
                            <form class="form-horizontal " action="{{ route('generalSetting.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body ">
                                    <div class="row g-4 mb-3">
                                        <div class="col-lg-9 row g-3">
                                            <div class="col-md-6 form-floating">
                                                <input type="text" class="form-control"
                                                    @isset($generalSettings)
                                                value="{{ $generalSettings->name_ar }}" @endisset
                                                    id="name" placeholder="الاسم باللغة العربية" name="name_ar">
                                                <label for="ar-name" class=" col-form-label">اسم باللغة العربيه</label>
                                            </div>
                                            <div class="col-md-6 form-floating">
                                                <input type="text"
                                                    @isset($generalSettings)
                                                value="{{ $generalSettings->name_en }}" @endisset
                                                    class="form-control" id="name"
                                                    placeholder="الاسم باللغة الانجليزية" name="name_en">
                                                <label for="e-name" class=" col-form-label ">اسم باللغة الانجليزية</label>
                                            </div>
                                            <div class="col-md-6 form-floating">
                                                <input type="email"
                                                    @isset($generalSettings)
                                                value="{{ $generalSettings->email }}" @endisset
                                                    class="form-control" id="name" placeholder="البريد الاكترونى"
                                                    name="email">
                                                <label for="e-mail" class=" col-form-label "> البريد
                                                    الالكترونى</label>
                                            </div>
                                            <div class="col-md-6 form-floating">
                                                <input type="text"
                                                    @isset($generalSettings)
                                                value="{{ $generalSettings->tel1 }}" @endisset
                                                    class="form-control" id="name" placeholder="التليفون"
                                                    name="tel1" pattern="[0-9]{11}"
                                                    title="لابد من كتابة رقم الهاتف المكون من 11 رقم">
                                                <label for="tel" class=" col-form-label "> التليفون
                                                </label>
                                            </div>
                                            <div class="col-md-6 form-floating">
                                                <input type="text"
                                                    @isset($generalSettings)
                                                value="{{ $generalSettings->tel2 }}" @endisset
                                                    class="form-control" id="name" placeholder="تليفون اخر"
                                                    name="tel2" pattern="[0-9]{11}"
                                                    title="لابد من كتابة رقم الهاتف المكون من 11 رقم">
                                                <label for="tel" class=" col-form-label ">
                                                    تليفون اخر</label>
                                            </div>
                                            <div class="col-md-6 form-floating">
                                                <input type="text"
                                                    @isset($generalSettings)
                                                value="{{ $generalSettings->address }}" @endisset
                                                    class="form-control" id="name" placeholder="العنوان"
                                                    name="address">
                                                <label for="address" class=" col-form-label">
                                                    العنوان</label>
                                            </div>
                                            <div class="col-md-6 form-floating">
                                                <input type="file" class="form-control" id="name"
                                                    placeholder="اللوجو" name="logo">
                                                <label for="site" class=" col-form-label">لوجو المؤسسة</label>
                                            </div>
                                            <div class="col-sm-6 mt-3 form-floating">
                                                <textarea class="form-control" rows="3" id="note" placeholder="الرؤية ..." name="vision">
@isset($generalSettings)
{{ $generalSettings->vision }}
@endisset
</textarea>
                                                <label for="note" class=" col-form-label n_ro3ya">الرؤية</label>
                                            </div>
                                            <div class="col-sm-6 mt-3 form-floating">
                                                <textarea class="form-control" rows="3" id="note" placeholder="الرسالة ..." name="mission">
@isset($generalSettings)
{{ $generalSettings->mission }}
@endisset
</textarea>
                                                <label for="note" class=" col-form-label n_ro3ya">الرسالة</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src=" @isset($generalSettings) {{ asset('/public/' . Storage::url($generalSettings->logo)) }} @endisset"
                                                style="max-width: 100%;" id="imgshow">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn  bg-success"><i class="fa fa-check text-light"
                                                aria-hidden="true"></i></button>
                                    </div>
                                </div> <!-- /.card-footer -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection
