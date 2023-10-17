
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/animate_card.css') }}"> --}}
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
@extends('layouts.default')
@section('title','Quantanics Contact')
@section('main-content')


<section class="container mr-top-10">
    {{-- title text content --}}
    <div class="d-flex flex-column align-items-start justify-content-center" style="font-size: 25px;">
        <h1>Contact Us</h1>
        <p class="paragraph_text" style="font-size:25px;">Want to know much about the company and products. Interested in developing a long-term relationship with quantanics, we are there for you. Feel free to contact.</p>
    </div>

    {{-- title image content --}}
    <div class="d-flex flex-row align-items-center justify-content-center mb-5">
        <img src="{{ asset('img/img5.jfif') }}" class="only_img" style="mix-blend-mode: darken;" alt="">
    </div>


    <div class="card border border-2 border-grey rounded shadow shadow-md p-2 mb-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column align-items-center justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.006259403895!2d78.08912692044497!3d9.933436038867058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00cfb144432119%3A0x35b104e88a1bce04!2sQuantanics%20Techserv%20Private%20Limited!5e0!3m2!1sen!2sin!4v1634620232131!5m2!1sen!2sin" class="google_map_iframe" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-1">
                <h3 class="text-center " style="color:#0492c2;">Quantanics Techserv Pvt Ltd</h3>
                <div class="d-flex flex-row p-4">
                    <div>
                        <i class="fa fa-home text-primary" style="font-size:1.5rem;margin-right:1rem;"></i>
                    </div>
                    <div class="d-flex flex-column align-items-start justify-content-center">
                        <p class="paragraph_contact_text">No.207/49 A, VOC Nagar, North Street, Kalavasal,</p>
                        <p class="paragraph_contact_text">Madurai-625016, Tamil Nadu, India.</p>
                    </div>
                </div>

                <div class="d-flex flex-row p-4">
                    <div>
                        <i class="fa fa-envelope text-primary" style="font-size:1.5rem;margin-right:1rem;"></i>
                    </div>
                    <div class="d-flex flex-column align-items-start justify-content-center">
                        <p class="paragraph_contact_text">support@quantanics.com</p>
                    </div>
                </div>

                <div class="d-flex flex-row p-4">
                    <div>
                        <i class="fa fa-phone text-primary" style="font-size:1.5rem;margin-right:1rem;"></i>
                    </div>
                    <div class="d-flex flex-column align-items-start justify-content-center">
                        <p class="paragraph_contact_text">+91 7010897188</p>
                    </div>
                </div>

                <div class="d-flex flex-row align-items-center justify-content-around p-4">
                    <i class="fa fa-facebook text-primary" style="font-size: 1.5rem;"></i>
                    <i class="fa fa-twitter text-primary" style="font-size: 1.5rem;"></i>
                    <i class="fa fa-youtube text-primary" style="font-size: 1.5rem;"></i>
                    <i class="fa fa-google text-primary" style="font-size: 1.5rem;"></i>
                    <i class="fa fa-linkedin text-primary" style="font-size: 1.5rem;"></i>
                </div>

                <div class="d-flex flex-row justify-content-start align-items-center">
                    <p class="paragraph_contact_text" style="">© 2023 Copyright: Quantanics TechServ Pvt Ltd. All Rights Reserved.</p>
                </div>

            </div>
        </div>
    </div>
</section>




@endsection

