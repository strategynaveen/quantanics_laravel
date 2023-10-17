
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/our_clients.css') }}">

@extends('layouts.default')
@section('title','Quantanics Website')
@section('main-content')
  <div class="mr-top-10">
    <h1 class="title">Academic Clients</h1>
  <div id="app" class="container">
    <card data-image="clients/nokia-logo-.png">
      <!-- <h1 slot="header">Home Automation</h1> -->
      <!-- <p slot="content">Internet of Things</p> -->
    </card>
    <card data-image="./clients/img2.png">
    </card>
    <card data-image="./clients/innomaint.png">
    </card>
    <card data-image="./clients/img4.png">
    </card>
    <card data-image="./clients/prime/Indian-Oil.png">
      <!-- <h1 slot="header">Emergency Exit</h1> -->
      <!-- <p slot="content">Machine Learning</p> -->
    </card>
    <card data-image="./clients/prime/img35.png">
      <!-- <h1 slot="header">Object Tracking</h1> -->
      <!-- <p slot="content">Machine Learning</p> -->
    </card>
    <card data-image="./clients/prime/img10.png">
      <!-- <h1 slot="header" style="bottom: 25px;">Smart Washroom Management</h1> -->
      <!-- <p slot="content">Artificial Intelligence</p> -->
    </card>
    <card data-image="./clients/prime/img5.jpg">
    </card>
    <card data-image="./clients/prime/img34.png">
    </card>
    <card data-image="./clients/prime/img11.png">
      <!-- <h1 slot="header">AC Automation</h1> -->
      <!-- <p slot="content">Internet of Things</p> -->
    </card>
    <card data-image="./clients/prime/img16.png">
    </card>
    <card data-image="./clients/prime/img13.png">
    </card>
    <card data-image="./clients/prime/guvi.png">
    </card>
    <card data-image="./clients/prime/stematic.png">
    </card>
    <card data-image="./clients/prime/img32.png">
    </card>
    <card data-image="./clients/prime/img33.png">
    </card>
    <card data-image="./clients/prime/img29.png">
      <!-- <h1 slot="header">Smart Waste Decomposer</h1> -->
      <!-- <p slot="content">Internet of Things</p> -->
    </card>
    <card data-image="./clients/prime/img22.png">
    </card>
    <card data-image="./clients/prime/img36.jpg">
    </card>
    <card data-image="./clients/img5.jpg">
    </card>
    <card data-image="./clients/prime/prithivi.png">
    </card>
    <card data-image="./clients/prime/edge-matrix.png">
    </card>
    <card data-image="./clients/prime/img31.png">
    </card>
  </div>
  </div>
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script>
  <script src="{{ asset('js/work_page.js') }}"></script>

@endsection