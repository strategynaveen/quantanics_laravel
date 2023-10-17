

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/work_page.css') }}">

@extends('layouts.default')
@section('title','Quantanics Website')
@section('main-content')
<body>
  <!-- <h1 class="title">Hover over the cards</h1> -->
  <div id="app" class="containerW mr-top-10">
    <card data-image="./works-img/img1.jpg">
      <h1 slot="header">Home Automation</h1>
      <p slot="content">Internet of Things</p>
    </card>
    <card data-image="./works-img/img2.jpg">
      <h1 slot="header">Agriculture Automation</h1>
      <p slot="content">Internet of Things</p>
    </card>
    <card data-image="works-img/img3.jpg">
      <h1 slot="header">Power Monitoring</h1>
      <p slot="content">Internet of Things</p>
    </card>
    <card data-image="works-img/img4.jpg">
      <h1 slot="header">Object Detection</h1>
      <p slot="content">Machine Learning</p>
    </card>
    <card data-image="works-img/img5.jpg">
      <h1 slot="header">Emergency Exit</h1>
      <p slot="content">Machine Learning</p>
    </card>
    <card data-image="works-img/img6.jpg">
      <h1 slot="header">Object Tracking</h1>
      <p slot="content">Machine Learning</p>
    </card>
    <card data-image="works-img/img7.jpg">
      <h1 slot="header" style="bottom: 25px;">Smart Washroom Management</h1>
      <p slot="content">Artificial Intelligence</p>
    </card>
    <card data-image="works-img/img8.jpg">
      <h1 slot="header">Industrial Management</h1>
      <p slot="content">Artificial Intelligence</p>
    </card>
    <card data-image="works-img/img9.jpg">
      <h1 slot="header">Smart clock</h1>
      <p slot="content">Artificial Intelligence.</p>
    </card>
    <card data-image="works-img/img10.jpg">
      <h1 slot="header">AC Automation</h1>
      <p slot="content">Internet of Things</p>
    </card>
    <card data-image="works-img/img11.jpg">
      <h1 slot="header">Smart Waste Decomposer</h1>
      <p slot="content">Internet of Things</p>
    </card>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script>
  <script src="{{ asset('js/work_page.js') }}"></script>
</body>
@endsection