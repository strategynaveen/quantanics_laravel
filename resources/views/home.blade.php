
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/animate_card.css') }}"> --}}
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<script src="{{ asset('js/counter.js') }}"></script>
{{-- <link rel="stylesheet" href="{{ asset('css/cient.css') }}"> --}}
@extends('layouts.default')
@section('title','Quantanics Website')

@section('main-content')
<!-- top container -->
<section class="container-fluid" style="padding-bottom:5%;">
    <div class="row">
      <div class="col-md-12">

        <div class="top-container">
          <div class="content-top">
            <p></p>
            <h1>We build </h1>
            <h1>products for <h1 class="ml4">
                <span class="letters letters-1">R&D labs.</span>
                <span class="letters letters-2">Enterprises.</span>
                <span class="letters letters-3">Startups.</span>
              </h1>
            </h1>

            <div class="row" style="display:flex;flex-direction:row;align-items:center;justify-content:space-around;">
                <div class="col-lg-4 col-md-6 col-sm-12 minor-card-alignment">
                    <div class="products">
                        <hr>
                        <h4 class="num" data-val="250">0</h4>
                        <h2>Products</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 minor-card-alignment">
                    <div class="mvp" style="margin-top: 15%;">
                        <hr>
                        <h4 class="num" data-val="500">0</h4>
                        <h2>MVPs</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 minor-card-alignment">
                    <div class="awards" style="margin-top: 15%;">
                        <hr>
                        <h4 class="num" data-val="25">0</h4>
                        <h2>Awards</h2>
                    </div>
                </div>
            </div>




          </div>
        </div>

      </div>
    </div>
</section>


<section>

  <div id="aboutus">
    <h1 class="containerh1" style="padding-bottom:0;">ABOUT US <br />
      <hr style="color: #fff;">
    </h1>


    <div class="ui segment row" style="background-color:#38acec;font-size:16px;border:none;">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <img class="img-thumbnail "  style="background: transparent;border:none;" src="{{ asset('img/abt2.png') }}">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <p style="margin-top:5%;"><span style="font-size:30px;">Quantanics</span> was founded in 2018 by a group of young
          and rejuvenated engineers who wanted to prove their stand in Industry 4.0 by making this world a better place to
          live. Today, Quantanics has established a
          distinguished reputation by successfully developing intelligent devices and products for several industrial
          giants and MNCs. We find ourselves in a dominating position among our competitors, majorly because of the medley
          in our team with
          strengths in different domains such as Block
          chain, Internet of Things, Robotics & Automation, AI (Artificial Intelligence), XR (Extended Reality), Big Data
          & many more. We also developing industrial 3D modules and we providing technical workshops in and around tamil
          nadu for student,
          teaching professions and industry professions</p>
      </div>


    </div>
  </div>
</section>


<section>

  <!--- our domains-->
  <h1 class="containerh1">OUR DOMAINS
    <hr>
  </h1>

  <div class="domain-section">
    <div class="domain-container">
      <div class="grid-box">
        <div class="icon"
          style="background-image:url({{ asset('img/ourdomains/MLAI.jpg') }});background-attachment: cover;background-position: center;background-repeat: no-repeat;background-size: cover;">
          <!-- <img src="ourdomains/ALML.png" alt="" class="aiml"> -->
          <!-- <i class="fas fa-brain"></i> -->
        </div>
        <div class="content words">
          <h3>AI & ML</h3>
          <p>Artificial Intelligence (AI) and Machine Learning (ML) are two very hot buzzwords right now, and often seem
            to be used interchangeably.</p>
        </div>
      </div>


      <div class="grid-box" style="background-color: rgb(255, 61, 61);">
        <div class="icon"
          style="background-image:url({{ asset('img/ourdomains/robo1.jpg') }});background-attachment: cover;background-position: center;background-repeat: no-repeat;background-size: cover;">
          <!-- <i class="fas fa-robot"></i> -->
        </div>
        <div class="content words">
          <h3>Robotics & Automation</h3>
          <p>Automation is the process of using physical machines, computer software and other technologies to perform
            tasks that are usually done by humans.</p>
        </div>
      </div>

      <div class="grid-box" style="background-color: rgb(144, 218, 144);">
        <div class="icon"
          style="background-image:url({{ asset('img/ourdomains/blockchain.jpg') }});background-attachment: cover;background-position: center;background-repeat: no-repeat;background-size: cover;"">
          <!-- <i class=" fas fa-link"></i> -->
        </div>
        <div class="content words">
          <h3>Block Chain</h3>
          <p> Blockchain is a shared, immutable ledger that facilitates the process of recording transactions and
            tracking assets in a business network.</p>
        </div>
      </div>

      <div class="grid-box" style="background-color: darkorchid;">
        <div class="icon"
          style="background-image:url({{ asset('img/ourdomains/bigdata.jpg') }});background-attachment: cover;background-position: center;background-repeat: no-repeat;background-size: cover;">
          <!-- <i class="fas fa-database"></i> -->
        </div>
        <div class="content words">
          <h3>Big Data Analytics</h3>
          <p>Big data analytics is complex process of examining big data to uncover information that can help
            organizations make business decisions.</p>
        </div>
      </div>

      <div class="grid-box" style="background-color: rgb(250, 131, 151);">
        <div class="icon"
          style="background-image:url({{ asset('img/ourdomains/IoT.png') }});background-attachment: cover;background-position: center;background-repeat: no-repeat;background-size: cover;">
          <!-- <i class="fas fa-laptop-house"></i> -->

        </div>
        <div class="content words">
          <h3>Internet Of Things</h3>
          <p>The Internet of Things (IoT) refers to a system of interrelated are able to collect and transfer data over
            a wireless network without human intervention.</p>
        </div>
      </div>

      <div class="grid-box" style="background-color: goldenrod;">
        <div class="icon"
          style="background-image:url({{ asset('img/ourdomains/web3d.png') }});background-attachment: cover;background-position: center;background-repeat: no-repeat;background-size: cover;">
          <!-- <i class="fas fa-laptop-code"></i> -->
        </div>
        <div class="content words">
          <h3>Website & 3D Designing</h3>
          <p>3D modeling is the process of developing a mathematical coordinate-based representation of an object in
            three dimensions.</p>
        </div>
      </div>


    </div>
  </div>
</section>

<!--- approach -->
<div class="approach">
    <h1 class="containerh1" style="color: #fff;">OUR APPROACH <br />
      <hr />
    </h1>
    <img src="{{ asset('img/img2.png') }}" class="img-fluid" alt="Responsive image">

  </div>


<div id="ourpartners">
    <h1 class="containerh1">OUR CLIENTS <br />
      <hr>
    </h1>



    <span class="counter_ourclient"></span>
    <p>Our clients are people and organizations with ambition and imagination to unleash the power of IT for their
      businesses and ideas.
    </p>
    <section id="facts" class="facts">
      <div class="container">

      </div>
    </section>
    <div class="ui divider" style="border:none;"></div>
      <!-- <img class="ui middle aligned massive image" src="./indexpageimages/img3.jpg"> -->
</div>


{{-- card our client --}}

 {{-- forst row cards --}}
{{-- <section class="card-area">
    <section class="card-section">
      <div class="card-div">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <!-- <img src="img/img1.png" ><img> -->
              <img src=" {{ asset('clients/img1.png') }}" class="card-img" alt="" style="margin-top: 50px;">
            </div>
            <div class="card-back">
              <img src="{{ asset('clients/img1.png') }}" class="card-img" alt="" style="margin-top: 50px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading" style="margin-top: 5px;">
              Nokia Corporation
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card-div">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src=" {{ asset('clients/img2.png') }}" alt="" class="card-img" style="margin-top: 0px;">
            </div>
            <div class="card-back">
              <img src="{{ asset('clients/img2.png') }}" alt="" class="card-img" style="margin-top: 0px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading" style="margin-top: 20px;">
              Sri Mookambika Info Solutions Pvt Ltd
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card-div">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="{{ asset('clients/img3.png') }}" alt="" class="card-img" style="margin-top: 40px;">
            </div>
            <div class="card-back">
              <img src=" {{ asset('clients/img3.png') }}" alt="" class="card-img" style="margin-top: 40px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading" style="margin-top: 15px;">
              INNOMAINT
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card-div">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="{{ asset('clients/img4.png') }}" alt="" class="card-img">
            </div>
            <div class="card-back">
              <img src=" {{ asset('clients/img4.png') }}" alt="" class="card-img">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading" style="margin-top: 20px;">
              TITAN COMPANY LIMITED
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card-div">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="{{ asset('clients/new/prime/img2.png') }}" alt="" class="card-img">
            </div>
            <div class="card-back">
              <img src="{{ asset('clients/new/prime/img2.png') }}" alt="" class="card-img">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading " style="margin-top: 20px;">
              INDIAN OIL CORPORATION LIMITED
            </h3>
            <p class="inside-page__text">
            </p>
          </div>
        </div>
      </div>
    </section>
</section> --}}

{{-- second row cards --}}
{{-- <section class="card-area">
    <section class="card-section">
      <div class="card-div">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="{{asset('clients/new/prime/img5.jpg') }}" alt="" class="card-img">
            </div>
            <div class="card-back">
              <img src="{{ asset('clients/new/prime/img5.jpg') }}" alt="" class="card-img">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading" style="margin-top: 15px;">
              InfyIoT Solutions
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="{{ asset('clients/new/prime/img10.png') }}" alt="" class="card-img" style="margin-top: 50px;">
            </div>
            <div class="card-back">
              <img src="{{ asset('clients/new/prime/img10.png') }}" alt="" class="card-img" style="margin-top: 50px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading" style="margin-top: 20px;">
              SMARTORIES
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="{{ asset('clients/img8.jpg') }}" class="card-img" alt="">
            </div>
            <div class="card-back">
              <img src="{{ asset('clients/img8.jpg') }}" class="card-img" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading" style="margin-top: 15px;">
              GEOMEO INFORMATICS
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="{{ asset('clients/img9.png') }}" alt="" class="card-img" style="margin-top: 30px;">
            </div>
            <div class="card-back">
              <img src="{{ asset('clients/img9.png') }}" alt="" class="card-img" style="margin-top: 30px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading " style="margin-top: 5px;">
              GUVI
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="{{ asset('clients/new/prime/img11.png') }}" alt="" class="card-img" style="margin-top: 20px;">
            </div>
            <div class="card-back">
              <img src="{{ asset('clients/new/prime/img11.png') }}" alt="" class="card-img" style="margin-top: 20px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading" style="margin-top: 25px;">
              Pop Farme Tech Pvt Ltd
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
</section> --}}

{{-- third row cards --}}

@endsection


