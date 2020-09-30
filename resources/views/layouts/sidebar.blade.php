<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ asset('/') }}">
        <div class="sidebar-brand-icon">
          <img class="img-profile rounded-circle" src="{{ asset('frontend') }}/img/logo/logo3.jpg">
        </div>
        <div class="sidebar-brand-text mx-3">CovBogor</div>
      </a>
      <hr class="sidebar-divider my-9">
      <li class="nav-item active">
        <a class="nav-link" href="/inputdata">
        <i class="fab fa-fw fa-wpforms"></i>
          <span>Input</span></a>
      </li>
      <hr class="sidebar-divider my-9">
      <li class="nav-item active">
        <a class="nav-link" href="/beranda">
        <i class="fa fa-home"></i>
          <span>Home</span></a>
      </li>
      <hr class="sidebar-divider my-9">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <span>Others</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="buttons.html">information</a>
            <a class="collapse-item" href="{{ ('medicio') }}/#daftar-rs">Daftar RS</a>
            <a class="collapse-item" href="/">Login</a>
          </div>
        </div>
      </li>
</ul><!-- Sidebar -->