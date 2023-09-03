@extends('layouts.default')

@section('title','Customer Services')
@section('main-content')
    <section class="container-fluid mt-1 " style="padding:0;margin:0;">
        <img src="{{ asset('servicesimg/customerserviceimages/img1.png') }}" style="position:relative;border:none;" class="img-thumbnail" alt="">
        <h1 class="text-info mt-5" style="position: absolute;top:35%;right:4%;width:600px;">We are deeply engaged with Customers & provide Services for Iot,
            Machine learning & Artificial intelligence products. </h1>


        <div class="row mb-2" style="width:100%;">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex flex-row align-items-center justify-content-center" style="font-size: 3.4rem;font-weight:400;">
                        250+
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-center" style="font-weight: 400;font-size:1rem;">
                        PRODUCTS
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex flex-row align-items-center justify-content-center" style="font-size: 3.4rem;font-weight:400;">
                        250+
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-center" style="font-weight: 400;font-size:1rem;">
                        MVP`S
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex flex-row align-items-center justify-content-center" style="font-size: 3.4rem;font-weight:400;">
                        250+
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-center" style="font-weight: 400;font-size:1rem;">
                        AWARDS
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex flex-row align-items-center justify-content-center" style="font-size: 3.4rem;font-weight:400;">
                        250+
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-center" style="font-weight: 400;font-size:1rem;">
                        TEAM MEMBERS
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- installation and testing --}}
    <section class="container ">
        <div class="row mb-5">
            <div class="col-lg-6 col-md-6 col-sm-12">
             <img src="{{ asset('servicesimg/customerserviceimages/img2.jpeg') }}" class="img-thumbnail border border-0" style="mix-blend-mode: darken;"  alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column align-items-start justify-content-center">
                <h3>Installation & Testing</h3>
                <p class="paragraph_text">Our well trained service engineers will ensure safe and proper installation of your products. They will demonstrate how to use and handle the product for better life cycle. Hence its leads to better goodwill of your company.</p>
            </div>
        </div>
    </section>

    {{-- upgradation --}}
    <section class="container">
        <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column align-items-start justify-content-center">
                <h3>Upgradation</h3>
                <p class="paragraph_text">User needs, technologies and market trends are fast changing. It is required to continuously upgrade System Software, Hardware and Embedded Software of existing products and deliver value continuously. We help you to upgrade your products and solutions when and where required.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{ asset('servicesimg/customerserviceimages/img3.jpg') }}" class="img-thumbnail border border-0" style="mix-blend-mode: darken;"  alt="">
            </div>
        </div>
    </section>

    {{-- Maintenance --}}
    <section class="container mb-4">
        <div class="row mb-5">
            <div class="col-lg-6 col-md-6 col-sm-12">
             <img src="{{ asset('servicesimg/customerserviceimages/img4.jpg') }}" class="img-thumbnail border border-0" style="mix-blend-mode: darken;"  alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column align-items-start justify-content-center">
                <h3>Maintenance</h3>
                <p class="paragraph_text">Electronics and IT Systems requires proper maintenance in order to make their availability high. We provide managed services through Comprehensive Annual Maintenance Contract with real time monitoring of equipment functionality and perform predictive maintenance.</p>
            </div>
        </div>
    </section>

    <div class="container">
        <hr>
    </div>

@endsection