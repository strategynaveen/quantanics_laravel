<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      {{-- <a class="navbar-brand" href="/">Navbar</a> --}}
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
            <a class="nav-link" href="/service">Service</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="/clients">Our Clients</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="/contact_us">Contact US</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="/work">Work</a>
          </li>
        </ul>
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
        <div class="d-flex align-items-center">
            <img src="{{ asset('img/logo1.png') }}" style="height: 2.5rem;width:2.5rem;" alt="">
            <div class="text-center p-2 text-info font-weight-bold h5">Quantanics Tech Serve PVT</div>
        </div>
      </div>
    </div>
</nav>
