@extends('layouts.public')

@section('head')
    <title> Pixel | Design Agency </title>
    <link rel="stylesheet" href="{{asset('/assets/pages/welcome.css')}}">
@endsection


@section('body')
    <main>
        
        <section class="story-section" id="our-story">

            <h1 class="section-title"> Our Story </h1>
            <hr class="section-devider">
            <p class="section-lg-text">
                Welcome to Pixel Agency. Explore our capabilities and discover how we can help you unlock your brand's full potential. Here, we don't just think outside the box, we redefine it.
            </p>
            <span class="section-icon">
                @include('icons.blue-smile')
            </span>

        </section>


        <section class="services-section" id="services">

            <h1 class="section-title"> Services </h1>
            <hr class="section-devider">
            <div class="services-row">

                @php
                    $services = [
                        '01' => [
                            'title' => 'Web Design',
                            'text' => 'Our UI designs elevate user experiences, ensuring intuitive navigation and engaging interactions that keep audiences coming back for more.',
                            'list' => ['UX Design', 'UI Design', 'Prototyping', 'Usability Testing']
                        ],
                        '02' => [
                            'title' => 'Web Development',
                            'text' => 'From code to launch, our development team brings your digital vision to fruition with precision and expertise, creating robust, scalable solutions that drive results.',
                            'list' => ['Coding', 'Functionality', 'Optimization']
                        ],
                        '03' => [
                            'title' => 'Brand Identity',
                            'text' => 'Designing a unique logo and visual elements that represent your brand, including color schemes, typography, and imagery.',
                            'list' => ['Logo Design', 'Brand Book', 'Packaging Design', '3D/Motion Design']
                        ],
                        '04' => [
                            'title' => 'Digital Marketing',
                            'text' => 'Designing a unique logo and visual elements that represent your brand, including color schemes, typography, and imagery.',
                            'list' => ['SEO', 'Content Marketing', 'Social Media Marketing', '3D/Motion Design']
                        ],
                    ]
                @endphp

                @foreach ($services as $number => $service)
                    <div class="service-card">
                        <span class="service-number"> {{$number}} </span>
                        <div class="service-content">
                            <h2 class="service-title"> {{$service['title']}} </h2>
                            <p class="service-text">
                                {{$service['text']}}
                            </p>
                            <ul class="service-list">
                                @foreach ($service['list'] as $item)
                                    <li class="service-list-item"> {{$item}} </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach

            </div>

        </section>

        <section class="our-works-section compact-section" id="our-works">
            
            <div class="works-categories">
                @php
                    $list = ['Agency', 'Typhography', 'Design', 'Interaction', 'Element', 'Digital Solution', 'Studio']
                @endphp
                <ul class="work-list">
                    @foreach ($list as $item)
                        <li class="work-list-item"> {{$item}} </li>
                    @endforeach 
                </ul>
            </div>


            <div class="works-banner">
                <h6 class="banner-mini-title"> Our </h6>
                <div class="banner-items-wrapper">
                    @for ($i = 0; $i < 10; $i++)
                        <span class="banner-item"> WORKS </span>
                    @endfor
                </div>
            </div>

            <div class="works-portfos">
                <div class="portfos-content-wrapper">
                    <p class="portfos-content-text">
                        With our active presence in the country's digital and startup space, we tried to expand our mastery over businesses in various industries and gain various experiences. We are ready to share these experiences to create a different product for you that will have the best output for your business.
                    </p>
                    <a href="#" class="btn main-btn">
                        <span> View All </span>
                        @include('icons.right-arrow')
                    </a>
                </div>
                <div class="portfos-carousel-wrapper">
                    <div class="owl-carousel portfos-carousel">
                        @for ($n = 1; $n <= 3; $n++)
                            <div class="portfos-carousel-item">
                                <a href="#" class="portfos-carousel-link">
                                    <img src="{{asset('assets/img/portfo-'.$n.'.jpg')}}" alt="Portfolio {{$n}}" class="portfos-carousel-img">
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>


        </section>

        <section class="articles-section" id="articles">

            <h1 class="section-title"> Recommended Articles </h1>
            <hr class="section-devider">

            <div class="articles-row">
                @for ($i = 0; $i < 3; $i++)
                    <div class="article">
                        <span class="article-length">
                            @include('icons.book')
                            5 min
                        </span>
                        <img src="{{asset('assets/img/article.jpg')}}" class="article-img" alt="Prometheus and its storage: Architecture, challenges, and solutions">
                        <span class="article-time"> 3 h ago </span>
                        <h4 class="article-title">Prometheus and its storage: Architecture, challenges, and solutions</h4>
                        <p class="article-text">
                            {{shorten("Vector is a powerful, flexible Open Source tool for log collection. Here is how it works and how you can deploy it in Kubernetes, together with fascinating cases from our experience of years using it.", 120)}}
                        </p>
                    </div>
                @endfor
            </div>

        </section>

    </main>
@endsection



@section('scripts')
    <script src="{{asset('/assets/pages/welcome.js')}}"></script>
@endsection