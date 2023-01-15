<header class="navbar navbar-dark sticky-top bg-warning flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/homestay"> Klik Homestay</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-warning w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="nav-link px-3 bg-warning border-0"> <a class="text-decoration-none text-white"> Logout</a></button>
    </form>
  </div>
</header>