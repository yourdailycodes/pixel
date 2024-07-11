<header id="public-header" class="public-header">

    <section class="top-bar">

        <div class="logo-container">
            <img src="{{asset('assets/logo.svg')}}" alt="Pixel | Design Agency" class="main-logo">
        </div>

        <div class="nav-container">
            
            <nav class="main-nav">
                <a href="#" class="nav-link">
                    @include('icons.menu')
                </a>
                <a href="#" class="nav-link">
                    @include('icons.shopping-bag')
                </a>
            </nav>

            {{-- <nav class="hamburger-nav">
                <a href="#"></a>
            </nav> --}}

        </div>
        
    </section>

    <section class="header-carousel owl-carousel">
        @for ($n = 1; $n <= 8; $n++)
            <div class="carousel-item">
                <a href="#" class="carousel-link">
                    <img src="{{asset('assets/img/sample-'.$n.'.jpg')}}" class="carousel-img" alt="Sample {{$n}}">
                </a>
            </div>
        @endfor
    </section>

    <section class="hero">

        <div class="hero-content">
            
            <p class="hero-text"> Join us as we redefine the future of your website together and bring visions to life. </p>

            <a href="#" class="btn main-btn">
                <span> Contact Us </span>
                @include('icons.right-arrow')
            </a>

            @include('icons.arrow-down')

        </div>

    </section>

</header>