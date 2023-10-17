<nav class="navbar navbar_class_handle bg-light fixed-top">
    <div class="container-fluid">
        <div class="logo_text">
            <img src="{{ asset('img/logo1.png') }}" style="height: 3rem;width: 3rem;" alt="">
            <a class="navbar-brand text-info fw-bolder" href="#">Quantanics Tech Serve PVT Ltd</a>
        </div>
        
      <!-- toggle button -->
      <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- sidebar content -->
      <div class="offcanvas sidebar  sidbar_width offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1  align-items-center">
            <li class="nav-item  {{ ((Request::is('/')) ? 'active_bg' : '') }}">
              <a class="nav-link ms_dlex" aria-current="page" href="/"><i class="fa fa-home icon_style_inactive "></i><span class="link_text">Home</span></a>
            </li>
            <li class="nav-item {{ ((Request::is('about_page')) ? 'active_bg' : '') }}">
                <a class="nav-link text-muted ms_dlex" href="about_page"><i class="	fa fa-info icon_style_inactive ms_w30"></i><span class="link_text">About</span></a>
            </li>
            <li class="nav-item {{ ((Request::is('services')) ? 'active_bg' : '') }}">
                <a class="nav-link text-muted ms_dlex" href="services"><i class="fa fa-sitemap icon_style_inactive ms_w30"></i><span class="link_text">Services</span></a>
            </li>
            <li class="nav-item {{ ((Request::is('our_client')) ? 'active_bg' : '') }}">
                <a class="nav-link text-muted ms_dlex" href="our_client"><i class="	fa fa-users icon_style_inactive"></i><span class="link_text">Our Clients</span></a>
            </li>
            <li class="nav-item {{ ((Request::is('contact_us')) ? 'active_bg' : '') }}">
                <a class="nav-link text-muted ms_dlex" href="contact_us"><i class="fa fa-vcard-o icon_style_inactive"></i><span class="link_text">Contact Us</span></a>
            </li>
            <li class="nav-item {{ ((Request::is('work')) ? 'active_bg' : '') }}">
                <a class="nav-link text-muted ms_dlex" href="work"><i class="	fa fa-newspaper-o icon_style_inactive"></i> <span class="link_text">Work</span></a>
            </li>
            <li class="nav-item {{ ((Request::is('eic')) ? 'active_bg' : '') }}">
              <a class="nav-link text-muted ms_dlex" href="eic"><i class="fa fa-pencil-square-o icon_style_inactive"></i><span class="link_text">EIC</span></a>
            </li>
           
          </ul>
        </div>
      </div>
    </div>
</nav>