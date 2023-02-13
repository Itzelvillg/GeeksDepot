<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('administracion') }}">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('userAdm') }}">
                <span data-feather="file"></span>
                Users
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('productAdm') }}">
                <span data-feather="shopping-cart"></span>
                Products
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('blogAdm') }}">
                <span data-feather="users"></span>
               Blog
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('brandAdm') }}">
                <span data-feather="bar-chart-2"></span>
                Brands
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('purchaseAdm') }}">
                <span data-feather="layers"></span>
               Purchase
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('imgAdm') }}">
                <span data-feather="bar-chart-2"></span>
               Images
              </a>
            </li>
          </ul>
  
        </div>
      </nav>
  
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">@yield('title')</h1>
          {{-- <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div> --}}
        </div>

        @yield('content')
  
       
      </main>
    </div>
  </div