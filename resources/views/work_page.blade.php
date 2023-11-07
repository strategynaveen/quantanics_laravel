

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('css/work_page.css') }}"> --}}

@extends('layouts.default')
@section('title','Quantanics Website')
@section('main-content')
  <!-- <h1 class="title">Hover over the cards</h1> -->
  <section class="container-fluid mr-top-10" >
    <div class="row mb-4">
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('works-img/img1.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="text-center" style="font-size: 1rem;">Home Automation</h2>
            <h6 class="text-muted text-center" style="font-size:0.8rem;">Internet of Things</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('works-img/img2.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="text-center" style="font-size: 1rem;">Agriculture Automation</h2>
            <h6 class="text-muted text-center" style="font-size:0.8rem;">Internet of Things</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('works-img/img3.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="text-center" style="font-size: 1rem;">Power Monitoring</h2>
            <h6 class="text-muted text-center" style="font-size:0.8rem;">Internet of Things</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('works-img/img4.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="text-center" style="font-size: 1rem;">Object Detection</h2>
            <h6 class="text-muted text-center" style="font-size:0.8rem;">Machine Learning</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('works-img/img5.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="text-center" style="font-size: 1rem;">Emergency Exit</h2>
            <h6 class="text-muted text-center" style="font-size:0.8rem;">Machine Learning</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('works-img/img3.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="text-center" style="font-size: 1rem;">Object Tracking</h2>
            <h6 class="text-muted text-center" style="font-size:0.8rem;">Machine Learning</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('works-img/img6.jpeg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="text-center" style="font-size: 1rem;">Smart Washroom Management</h2>
            <h6 class="text-muted text-center" style="font-size:0.8rem;">Artificial Intelligence</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('works-img/img7.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="text-center" style="font-size: 1rem;">Industrial Automation</h2>
            <h6 class="text-muted text-center" style="font-size:0.8rem;">Artificial Intelligence</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('works-img/img8.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="text-center" style="font-size: 1rem;">Smart Clock</h2>
            <h6 class="text-muted text-center" style="font-size:0.8rem;">Artificial Intelligence</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('works-img/img10.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="text-center" style="font-size: 1rem;">AC Automation</h2>
            <h6 class="text-muted text-center" style="font-size:0.8rem;">Internet of Things</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('works-img/img11.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="text-center" style="font-size: 1rem;">Smart Waste Decomposer</h2>
            <h6 class="text-muted text-center" style="font-size:0.8rem;">Internet of Things</h6>
          </div>
        </div>
      </div>
      
    </div>
  </section>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script>
  <script src="{{ asset('js/work_page.js') }}"></script>
@endsection