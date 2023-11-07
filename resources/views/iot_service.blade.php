
<link rel="stylesheet" href="{{ asset('css/services_css') }}">


@extends('layouts.default')
@section('title','Iot Services')
@section('main-content')

<div class="d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="margin-top: 7rem;position:fixed;z-index:100;background:whitesmoke;">
      <button class="nav-link active" id="v-pills-iot-tab" data-bs-toggle="pill" data-bs-target="#v-pills-iot" type="button" role="tab" aria-controls="v-pills-iot" aria-selected="true"><i class="	fa fa-rss" style="font-size: 20px;"></i></button>
      <button class="nav-link" id="v-pills-customer-tab" data-bs-toggle="pill" data-bs-target="#v-pills-customer" type="button" role="tab" aria-controls="v-pills-customer" aria-selected="false"><i class="fa fa-group" style="font-size: 20px;"></i></button>
      <button class="nav-link" id="v-pills-product-tab" data-bs-toggle="pill" data-bs-target="#v-pills-product" type="button" role="tab" aria-controls="v-pills-product" aria-selected="false"><i class="	fa fa-sitemap" style="font-size: 20px;"></i></button>
      <button class="nav-link" id="v-pills-etab-tab" data-bs-toggle="pill" data-bs-target="#v-pills-etab" type="button" role="tab" aria-controls="v-pills-etab" aria-selected="false"><i class="	fa fa-street-view" style="font-size: 20px;"></i></button>
    </div>
    <div class="tab-content" id="v-pills-tabContent">

        {{-- iot services --}}
        <div class="tab-pane fade show active" id="v-pills-iot" role="tabpanel" aria-labelledby="v-pills-iot-tab">

            {{-- iot base image --}}
            <section class="container-fluid  mb-3 mr-top-10">
                <div class="row border border-0">
                    <img src="{{ asset('servicesimg/iotserviceimages/Office Event QII copy.png') }}" class="img img-thumbnail" style="border: none;" alt="">
                </div>
            </section>

            {{-- iot image --}}
            <div class="container-fluid">
                <h2 class="text-center text-dark p-4">Whats is IOT ?</h2>
                <div class="row">
                    <img src="{{ asset('servicesimg/iotserviceimages/img2.gif') }}" class="img-thumbnail p-3" style="border:none;" alt="">
                </div>
            </div>

            {{-- our cababilites --}}
            <div class="container-fluid mb-4">
                <h2 class="text-center text-dark p-4 mt-4">Our Capabilities</h2>
                <div class="row m-2">
                    <img src="{{ asset('servicesimg/iotserviceimages/img4.png') }}" class="img-thumbnail p-3" style="border:none;" alt="">
                </div>
            </div>

            {{-- our approach --}}
            <div class="container-fluid mb-4">
                <h2 class="text-center text-dark p-4 mt-4">Our Approach</h2>
                <div class="row m-2">
                    <img src="{{ asset('servicesimg/iotserviceimages/img5.png') }}" class="img-thumbnail p-3" style="border:none;" alt="">
                </div>
            </div> 
            
        </div>

        {{-- Customer Services --}}
        <div class="tab-pane fade" id="v-pills-customer" role="tabpanel" aria-labelledby="v-pills-customer-tab">
            {{-- customer service base image --}}
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
        </div>

        {{-- prodcut development service --}}
        <div class="tab-pane fade" id="v-pills-product" role="tabpanel" aria-labelledby="v-pills-product-tab">
            <section class="container-fluid mt-1 " style="position: relative;">
                <div class="row mt-5 p-2">
                    <img src="{{ asset('servicesimg/productdevimages/img1.jpg') }}" style="border:none;" class="img-thumbnail" alt="">
                </div> 
                
                <div class="row mb-5">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                     <img src="{{ asset('servicesimg/productdevimages/B0ox CC0 EX QII 2 Snip copy.jpg') }}" class="img-thumbnail border border-0" style="mix-blend:darken;"  alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column align-items-start justify-content-center">
                        <h3>Design & Prototype</h3>
                        <p class="paragraph_text">We genuinely believe the potential impact of the Internet of Things will revolutionize profitable commerce worldwide and improve sufficiently our modern lives with intelligent devices. Our principal aim is precisely to contribute positively to this successful revolution by digitizing every material product with our most effective innovative solutions and typically allow them to play a role in economic and social developments. To our loyal customers we mutually pledge moral excellence in everything we typically do, with the fulfilled promise of continuous improvement and an uncompromising commitment to properly represent the distinct best.</p>
                    </div>
                </div>


                <div class="row mb-5">
                   
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column align-items-start justify-content-center">
                        <h3>Process Management</h3>
                        <p class="paragraph_text">We genuinely believe the potential impact of the Internet of Things will revolutionize profitable commerce worldwide and improve sufficiently our modern lives with intelligent devices. Our principal aim is precisely to contribute positively to this successful revolution by digitizing every material product with our most effective innovative solutions and typically allow them to play a role in economic and social developments. To our loyal customers we mutually pledge moral excellence in everything we typically do, with the fulfilled promise of continuous improvement and an uncompromising commitment to properly represent the distinct best.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="{{ asset('servicesimg/productdevimages/img4.jpg') }}" class="img-thumbnail border border-0" style="mix-blend:darken;"  alt="">
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="{{ asset('servicesimg/productdevimages/img3.jpg') }}" class="img-thumbnail border border-0" style="mix-blend:darken;"  alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column align-items-start justify-content-center">
                        <h3>Time Management</h3>
                        <p class="paragraph_text">We genuinely believe the potential impact of the Internet of Things will revolutionize profitable commerce worldwide and improve sufficiently our modern lives with intelligent devices. Our principal aim is precisely to contribute positively to this successful revolution by digitizing every material product with our most effective innovative solutions and typically allow them to play a role in economic and social developments. To our loyal customers we mutually pledge moral excellence in everything we typically do, with the fulfilled promise of continuous improvement and an uncompromising commitment to properly represent the distinct best.</p>
                    </div>
                </div>


                <hr>
            </section>
        </div>

        {{-- etab solution --}}
        <div class="tab-pane fade" id="v-pills-etab" role="tabpanel" aria-labelledby="v-pills-etab-tab" style="width:100%;">
            <section class="container-fluid mt-1" style="position: relative;">
                <div class="row mt-5 p-2">
                    <img src="{{ asset('servicesimg/etab/etapimages1.jpg') }}" class="img-thumbnail" style="border:none;" alt="">
                </div>
        
                <div class="paragraph_text" style="font-size: 20px;font-weight:450;">
                    We, Quantanics, are now into Etap works too!!!.
                    <br>
                    <br>
                    We have knowledged technical people who can work on Etap for bigger projects such as Airports, Hospitals, etc.
                    <br>
                    <br>
                    We can do Load Flow Analysis, Short Circuit Studies, Relay Coordination, Harmonic Analysis &amp; Arc Flash Study currently.
                    <br>
                    <br>
                    In near future, we will be able to cover Reliability Assessment &amp; Motor Acceleration, etc.
                    <br>
                    <br>
                    We look forward to have our clients to engage us in Etap alongwith our regular Electronics Business.
                    <br>
                    <br>
                    <p>To Know More About Etap Solutions.  <a href="https://etap.com/docs/default-source/brochures/etap-solutions-overview.pdf?sfvrsn=88144c7c_74">Click Here ...!</a></p>
                </div>
            </section>
        </div>
    </div>
</div>


@endsection