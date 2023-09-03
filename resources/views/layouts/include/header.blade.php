{{-- <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-navicon text-dark"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about_page">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/iot_service">IOT Service</a>
                <a class="dropdown-item" href="/customer_service">Customer Service</a>
                <a class="dropdown-item" href="/product_development_service">Production Development Service</a>
                <a class="dropdown-item" href="/etap_solution">Etap Solution</a>
            </div>
        </li>
          <li class="nav-item ">
            <a class="nav-link" href="/oru_clients">Our Clients</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/contact_us">Contact US</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/work">Work</a>
          </li>
        </ul>
        
        <div class="d-flex align-items-center">
            <img src="{{ asset('img/logo1.png') }}" style="height: 2.5rem;width:2.5rem;" alt="">
            <div class="text-center p-2 text-info font-weight-bold h5">Quantanics Tech Serve PVT</div>
        </div>
      </div>
    </div>
</nav> --}}


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <!-- div-1 -->
      <div class="icon_with_search_box d-flex">
          <a class="navbar-brand" href="#">
              <img src="{{ asset('img/logo1.png') }}" alt="Logo" class="rounded-circle" style="height: 45px;">
          </a>
          {{-- <form class="search_form d-flex" style="height: 35px;">
              <input class="form-control custom-input" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary search-btn" type="submit">Search</button>
          </form> --}}
          <h5 class="text-info">Quantanics Tech Serve PVT</h5>
        </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation" id="menu-icon">
          <span class="menu-icon">
              <div class="custom-toggler-icon"></div>
              <div class="custom-toggler-icon"></div>
              <div class="custom-toggler-icon"></div>
          </span>
      </button>

      <!-- div-2 -->
      <div class="collapse navbar-collapse" style="flex-grow: 0;" id="navbarSupportedContent">
          <div class="navbar-nav me-auto mb-2 mb-lg-0 d-flex" style="align-items: center;">
              <div class="nav-item">
                  <div class="icon"><i class="fa fa-home "  style="color: #70a5ff;font-size:1.6rem;"></i></div>
                  <div class="icon_name"><a class="nav-link active" aria-current="page" href="/">Home</a></div>
              </div>
              <div class="nav-item">
                  <div class="icon">
                      <i class="fa fa-address-card-o" style="color: #3673dd;font-size:1.6rem;"></i>
                  </div>
                  <div class="icon_name">
                      <a class="nav-link" href="/about_page">About</a>
                  </div>
              </div>
              <div class="nav-item">
                  <div class="icon">
                      <i class="fa fa-line-chart" style="color: #70a5ff;font-size:1.6rem;"></i>
                  </div>
                  <div class="icon_name " >
                      <a class="nav-link "  aria-current="page" href="/oru_clients">Our Clients</a>
                  </div>
              </div>
              <div class="nav-item">
                  <div class="icon">
                      <i class="fa fa-phone-square" style="color: #3673dd;font-size:1.6rem;"></i>
                  </div>
                  <div class="icon_name">
                      <a class="nav-link" href="/contact_us">Contact Us</a>
                  </div>
              </div>
              <div class="nav-item">
                <div class="icon">
                    <i class="	fa fa-pie-chart" style="color: #3673dd;font-size:1.6rem;"></i>
                </div>
                <div class="icon_name">
                    <a class="nav-link" href="/work">Work</a>
                </div>
            </div>
              <div class="nav-item-menu dropdown">
                <div class="icon">
                  <i class="	fa fa-newspaper-o" style="color:#3673dd;font-size:1.6rem;"></i>
                </div>
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      {{-- <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" alt="profile"
                          class="rounded-circle" style="height: 30px; position: relative;"> --}}
                          Services
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                      style="left:-150px; position: absolute;">
                      <li><a class="dropdown-item" href="/services/iot">Iot Services</a></li>
                      <li><a class="dropdown-item" href="/services/customer">Customer Services</a></li>
                      <li><a class="dropdown-item" href="/services/development">Product Development Services</a></li>
                      <li><a class="dropdown-item" href="/services/etap">Etap Solution</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</nav>