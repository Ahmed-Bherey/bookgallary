<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/admin/login/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('public/admin/login/css/style.css') }}">

    <title>Login</title>
</head>

<body>
    @include('admin.layouts.alerts.success')
    @include('admin.layouts.alerts.error')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="{{ asset('public/admin/login/images/undraw_file_sync_ot38.svg') }}" alt="Image"
                        class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign In to <strong>Dashboard</strong></h3>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur
                                    adipisicing.</p>
                            </div>
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group first">
                                    {{-- <label for="username">E-mail</label> --}}
                                    <input type="email" class="form-control" placeholder="E-mail" name="email"
                                        id="email">

                                </div>
                                <div class="form-group last mb-4">
                                    {{-- <label for="password">Password</label> --}}
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                        id="password">

                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot
                                            Password</a></span>
                                </div>

                                <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">


                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>

</html>
