<header id="main-section">
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white main-nav">
        <a class="navbar-brand" href="#index.html">
            <img src="{{asset('tamkeen-proj/assets/imgs/logo.png')}}" alt="logo" width="50%"></a>
        <button class="navbar-toggler  custom-toggler" type="button" data-toggle="collapse"
            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item @yield('homeActive')">
                    <a class="nav-link" href="{{asset('/')}}">الرئيسية </a>
                </li>
                <li class="nav-item @yield('pageActive')">
                    <a class="nav-link" href="{{asset('/page/about-us')}}"> عن الشركة </a>
                </li>
                <li class="nav-item @yield('servicesActive')">
                    <a class="nav-link" href="{{asset('services')}}"> خدماتنا </a>
                </li>
                <li class="nav-item @yield('productsActive')">
                    <a class="nav-link" href="{{asset('products')}}"> منتجاتنا </a>
                </li>
                <li class="nav-item @yield('cartActive')">
                    <a class="nav-link" href="{{asset('products/cart')}}"> سلة المشتريات
                    <?php
                        $cartItems = json_decode(request()->cookie('cart'),true)??[];
                        $count = count($cartItems);
                        if($count)
                            echo "<span class='badge badge-secondary'>($count)</span>";
                    ?>
                    </a>
                </li>
                <li class="nav-item @yield('contactActive')">
                    <a class="nav-link" href="{{asset('contact-us')}}"> اتصل بنا</a>
                </li>
            </ul>
            <div class="form-inline mt-2 mt-md-0 mr-auto">
                <ul class="navbar-nav">
                    @if (Route::has('login'))

                    @auth
                    <li class="nav-item @yield('profileActive')">
                        <a class="nav-link" href="{{asset('/member/profile')}}">مرحبا {{auth()->user()->name}}</a>
                    </li>
                    <li class="nav-item @yield('profileActive')">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                class="nav-link">تسجيل
                                خروج </a>

                        </form>
                    </li>
                    @else
                    <li class="nav-item @yield('profileActive')">
                        <a class="nav-link" href="{{asset('login')}}">تسجيل دخول</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item @yield('profileActive')">
                        <a class="nav-link" href="{{asset('register')}}">انضم الينا</a>
                    </li>
                    @endif
                    @endauth

                    @endif

                </ul>
            </div>
        </div>

    </nav>
</header>