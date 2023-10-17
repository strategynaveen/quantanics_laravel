
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/animate_card.css') }}"> --}}
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

@extends('layouts.default')
@section('title','Quantanics About')
@section('main-content')
{{-- about image --}}
<section class="container prevent-select mr-top-10" >
    <div class="d-flex align-items-center justify-content-center p-3">
        <img src="{{ asset('about/abt1.jpg') }}" class="only_img" style="mix-blend-mode: darken;" alt="">
    </div>
</section>

{{-- about image counter --}}
<section class="container prevent-select mt-5">
    <div class="d-flex flex-row align-items-center justify-content-around">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <span class="count_num">250+</span>
            <span class=" count_header">PRODUCTS</span>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <span class="count_num">500+</span>
            <span class="count_header">MVP`S</span>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <span class="count_num">25+</span>
            <span class="count_header">AWARDS</span>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <span class="count_num ">30+</span>
            <span class="count_header">TEAM MEMBERS</span>
        </div>
    </div>
</section>

{{-- our vision --}}
<section class="container mt-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="{{ asset('about/abt5.png') }}" class="img-thumbnail border border-0" style="mix-blend-mode: darken;" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column align-items-start justify-content-center">
            <h3>Our Vision</h3>
            <p class="paragraph_text" style="">We genuinely believe the potential impact of the Internet of Things will revolutionize profitable commerce worldwide and improve sufficiently our modern lives with intelligent devices. Our principal aim is precisely to contribute positively to this successful revolution by digitizing every material product with our most effective innovative solutions and typically allow them to play a role in economic and social developments. To our loyal customers we mutually pledge moral excellence in everything we typically do, with the fulfilled promise of continuous improvement and an uncompromising commitment to properly represent the distinct best.</p>
        </div>
    </div>
</section>

{{-- our mission --}}
<section class="container mt-5">
    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column align-items-start justify-content-center">
            <h3>Our Mission</h3>
            <p class="paragraph_text">To solve efficiently complex business and modern world challenges by efficiently providing digital solutions and help businesses unleash their own Internet of Things in the most cost-effective and innovative way.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="{{ asset('about/abt.png') }}" class="img-thumbnail border border-0" style="mix-blend-mode: darken;"  alt="">
        </div>
    </div>
</section>

{{-- About Us --}}
<section class="container mt-5 mb-5">
    <div class="row mb-5">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="{{ asset('about/abt4.jpg') }}" class="img-thumbnail border border-0" style="mix-blend-mode: darken;"  alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column align-items-start justify-content-center">
            <h3>About Us</h3>
            <p class="paragraph_text">Quantanics was founded in 2018 by a group of young and rejuvenated engineers who wanted to prove their stand in Industry 4.0 by making this world a better place to live. Today, we established a distinguished reputation by successfully developing intelligent devices and products for several industrial giants and MNCs. We find ourselves in a dominating position among our competitors, majorly because of the medley in our team with strengths in different domains such as Block chain, IOT, Robotics & Automation, AI , XR , Big Data & many more. We also developing industrial 3D modules and we providing technical workshops in and around TN for student, teaching professions and industry professions. </p>
        </div>
    </div>
</section>

@endsection
