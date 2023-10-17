
<link rel="stylesheet" href="{{ asset('css/services_css') }}">


@extends('layouts.default')
@section('title','Iot Services')
@section('main-content')


<div class="services_side_nav" id="services_side_sidenav">
    <a href="#" id="iot_services">Iot Services</a>
    <a href="#" id="customer_services">Customer Services</a>
    <a href="#" id="product_dev_services">Product Development Services</a>
    <a href="#" id="etap_services">Etap Solution</a>

</div>

{{-- iot image --}}
<section class="container-fluid  mb-3 mr-top-10">
    <div class="row border border-0">
        <img src="{{ asset('servicesimg/iotserviceimages/Office Event QII copy.png') }}" class="img img-thumbnail" style="border: none;" alt="">
    </div>
</section>



<div class="container-fluid">
    <h2 class="text-center text-dark p-4">Whats is IOT ?</h2>
    <div class="row">
        <img src="{{ asset('servicesimg/iotserviceimages/img2.gif') }}" class="img-thumbnail p-3" style="border:none;" alt="">
    </div>
</div>


{{-- our capabilites --}}
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

@endsection