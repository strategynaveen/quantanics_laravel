@extends('layouts.default')


@section('title','Product Development Services');

@section('main-content')
    <div class="container">
        <div class="row mt-5 p-2">
            <img src="{{ asset('servicesimg/productdevimages/img1.jpg') }}" style="border:none;" class="img-thumbnail" alt="">
        </div>

        <div class="row d-flex flex-row justify-content-center align-items-center mb-4">
            <h2 class="text-center">Life Cycle</h2>

            <img src="{{ asset('servicesimg/productdevimages/img2.png') }}" style="border:none;height:950px;" class="img-thumbnail" alt="">
        </div>

        <div class="row d-flex flex-row justify-content-center align-items-center mb-4 mt-2">
            <h2 class="text-center">Our Approach Towards Product Development</h2>
        </div>
    </div>


    {{-- design and prototype --}}
    <section class="container mb-4">
        <div class="row mb-5">
            <div class="col-lg-6 col-md-6 col-sm-12">
             <img src="{{ asset('servicesimg/productdevimages/B0ox CC0 EX QII 2 Snip copy.jpg') }}" class="img-thumbnail border border-0" style="mix-blend:darken;"  alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column align-items-start justify-content-center">
                <h3>Design & Prototype</h3>
                <p class="paragraph_text">We genuinely believe the potential impact of the Internet of Things will revolutionize profitable commerce worldwide and improve sufficiently our modern lives with intelligent devices. Our principal aim is precisely to contribute positively to this successful revolution by digitizing every material product with our most effective innovative solutions and typically allow them to play a role in economic and social developments. To our loyal customers we mutually pledge moral excellence in everything we typically do, with the fulfilled promise of continuous improvement and an uncompromising commitment to properly represent the distinct best.</p>
            </div>
        </div>
    </section>

    {{-- Process Management --}}
    <section class="container mb-4">
        <div class="row mb-5">
           
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column align-items-start justify-content-center">
                <h3>Process Management</h3>
                <p class="paragraph_text">We genuinely believe the potential impact of the Internet of Things will revolutionize profitable commerce worldwide and improve sufficiently our modern lives with intelligent devices. Our principal aim is precisely to contribute positively to this successful revolution by digitizing every material product with our most effective innovative solutions and typically allow them to play a role in economic and social developments. To our loyal customers we mutually pledge moral excellence in everything we typically do, with the fulfilled promise of continuous improvement and an uncompromising commitment to properly represent the distinct best.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{ asset('servicesimg/productdevimages/img4.jpg') }}" class="img-thumbnail border border-0" style="mix-blend:darken;"  alt="">
            </div>
        </div>
    </section>


    {{-- Time Management --}}
    <section class="container mb-4">
        <div class="row mb-5">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{ asset('servicesimg/productdevimages/img3.jpg') }}" class="img-thumbnail border border-0" style="mix-blend:darken;"  alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column align-items-start justify-content-center">
                <h3>Time Management</h3>
                <p class="paragraph_text">We genuinely believe the potential impact of the Internet of Things will revolutionize profitable commerce worldwide and improve sufficiently our modern lives with intelligent devices. Our principal aim is precisely to contribute positively to this successful revolution by digitizing every material product with our most effective innovative solutions and typically allow them to play a role in economic and social developments. To our loyal customers we mutually pledge moral excellence in everything we typically do, with the fulfilled promise of continuous improvement and an uncompromising commitment to properly represent the distinct best.</p>
            </div>
        </div>
    </section>


    {{-- line --}}
    <section class="container">
        <hr>
    </section>

@endsection