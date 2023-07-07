<header>
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 logo">
                <a class="text-decoration-none text-black" href="{{ route('home') }}"><i
                        class="fa-solid fa-book"></i><span>Book</span></a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex position-relative search">
                <input type="search" placeholder="search products" /><span class="search_icon"><i
                        class="fa-solid fa-magnifying-glass"></i></span>
            </div>
            <div class="col-12 col-md-6 col-lg-4 social d-flex">
                <div class="social_icon"><i class="fa-regular fa-user"></i></div>
                <div class="social_icon"><i class="fa-regular fa-heart"></i></div>
                <div class="social_icon"><i class="fa-solid fa-cart-shopping"></i></div>
            </div>
            <hr>
            <!-- navbar -->
            <nav class="text-center">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('books.index') }}">All Books</a></li>
                    <li><a href="{{ route('categories.index') }}">Categories</a></li>
                    @if (Auth::user())
                    <li><a href="{{ route('user.logout') }}">Logout</a></li>
                    @else
                    <li><a href="{{ route('user.login') }}">Login</a></li>
                    <li><a href="{{ route('user.register') }}">Register</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>
<main>
