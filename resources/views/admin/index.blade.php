@extends('admin.layouts.includes.master')
@section('title')
    Dashboard
@endsection
@section('content')
    @include('admin.layouts.alerts.success')
    @include('admin.layouts.alerts.error')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <h1>Welcome</h1>
            </div>
        </div>
    </div>
@endsection
