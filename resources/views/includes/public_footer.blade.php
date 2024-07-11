<footer id="public-footer" class="public-footer">

    <div class="slogan-area">

        <h6 class="slogan-intro"> GET IN TOUCH </h6>
        <h5 class="slogan-main"> LET'S WORK </h5>
        <h5 class="slogan-outline"> TOGETHER </h5>

        <a href="#" class="btn light-btn">
            <span> Contact Us </span>
            @include('icons.right-arrow')
        </a>

    </div>

    <div class="links-area">

        <div class="prime-col">
            <img src="{{asset('assets/logo.svg')}}" alt="Pixel | Design Agency" class="footer-logo">
            <div class="socials">
                <a href="#" class="social-link"> @include('icons.linkedin') </a>
                <a href="#" class="social-link"> @include('icons.youtube') </a>
                <a href="#" class="social-link"> @include('icons.twitter') </a>
                <a href="#" class="social-link"> @include('icons.facebook') </a>
            </div>
        </div>

        @php
            $footerLinks = [
                'main' => [
                    'Home' => route('home'),
                    'About' => route('about'),
                    'Services' => '#',
                    'Works' => '#',
                ],
                'pages' => [
                    'Home' => route('home'),
                    'About' => route('about'),
                    'Services' => '#',
                    'Works' => '#',
                ],
                'title' => [
                    'Title 1' => '#',
                    'Title 2' => '#',
                    'Title 3' => '#',
                    'Title 4' => '#',
                ]

            ]
        @endphp
        @foreach ($footerLinks as $cat => $links)
            <div class="links-col">
                <h6 class="links-col-title"> {{$cat}} </h6>
                @foreach ($links as $linkText => $linkTarget)
                    <a href="{{$linkTarget}}" class="links-col-link"> {{$linkText}} </a>
                @endforeach
            </div>
        @endforeach

    </div>

    <div class="rights-area">
        <span> © All Rights Reserved </span>
        <span> Pixel | Design Agency </span>
    </div>

</footer>