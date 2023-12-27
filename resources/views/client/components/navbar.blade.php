<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('client.index')}}">Coffee<small>Garden</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{route('client.index')}}" class="nav-link">Trang chủ</a></li>
                <li class="nav-item"><a href="{{route('client.products')}}" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="{{route('client.posts')}}" class="nav-link">Bài viết</a></li>
                <li class="nav-item"><a href="{{route('client.about')}}" class="nav-link">Giới thiệu</a></li>
                <li class="nav-item"><a href="{{route('client.contact')}}" class="nav-link">Liên hệ </a></li>
                <li class="nav-item cart"><a href="{{route('cart.list')}}" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@auth {{ Auth::user()->name }} @else Tài khoản @endauth</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        @auth
                            <a href="{{ route('profile.edit') }}" class="dropdown-item">Thông tin</a>
                        @else
                            <a href="{{ route('login') }}" class="dropdown-item">Đăng nhập</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="dropdown-item">Đăng kí</a>
                            @endif
                        @endauth
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
