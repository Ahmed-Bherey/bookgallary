<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('public/endUser/login/images/icons/favicon.ico') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/endUser/login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/endUser/login/css/main.css') }}">
</head>

<body>
    @include('admin.layouts.alerts.success')
    @include('admin.layouts.alerts.error')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form action="{{route('register')}}" method="POST" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-b-26">
                        Register
                    </span>
                    <span class="login100-form-title p-b-48">
                        <i class="zmdi zmdi-font"></i>
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid name is: a@b.c">
                        <input class="input100" type="text" name="name" required>
                        <span class="focus-input100" data-placeholder="name"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                        <input class="input100" type="text" name="email" required>
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid name is: a@b.c">
                        <input class="input100" type="text" name="address">
                        <span class="focus-input100" data-placeholder="Address"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid name is: a@b.c">
                        <input class="input100" type="text" name="tel">
                        <span class="focus-input100" data-placeholder="Phone"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password" required>
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Sign Up
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-115">
                        <span class="txt1">
                            have an account?
                        </span>

                        <a class="txt2" href="{{route('user.login')}}">
                            Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <script src="{{ asset('public/endUser/login/js/main.js') }}"></script>

</body>

</html>
