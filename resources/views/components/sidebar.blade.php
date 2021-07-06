
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand me-lg-5" href="../../index.html">
        <img class="navbar-brand-dark" src="{{url('assets/img/logo.jpeg')}}" alt="Volt logo" /> <img class="navbar-brand-light" src="{{url('assets/img/logo.jpeg')}}" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

        <nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
  <div class="sidebar-inner px-4 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="d-flex align-items-center">
        <div class="user-avatar lg-avatar me-4">
          <img src="../../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
            alt="Bonnie Green">
        </div>
        <div class="d-block">
          <h2 class="h6">Hola, {{Auth::user()->name}}</h2>
          <a href="../../pages/examples/sign-in.html" class="btn btn-secondary text-dark btn-xs"><span
              class="me-2"><span class="fas fa-sign-out-alt"></span></span>cerrar sesión</a>
        </div>
      </div>
      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" class="fas fa-times" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation"></a>
      </div>
    </div>
    <ul class="nav flex-column pt-3 pt-md-0">
     
      <li class="nav-item {{$inicio ?? ''}}">
        <a href="{{route('dashboard')}}" class="nav-link nv-color d-flex align-items-center">
          <span class="">
            <img src="{{url('assets/img/logo.jpeg')}}" width="200" alt="Logo">
          </span>
        </a>
      </li>

      <li class="nav-item vib">
        <span
          class="nav-link collapsed  d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#gestion">
          <span>
            <span class="sidebar-icon"><span class="fas fa-users"></span></span>
            <span class="sidebar-text">Clientes</span>
          </span> 
          <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
        </span>
        <div class="multi-level collapse"
          role="list" id="gestion" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="sidebar-icon"><span class="fas fa-plus"></span></span>
                <span class="sidebar-text">Cargar cliente</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{route('clientesShow')}}">
                <span class="sidebar-icon"><span class="fas fa-eye"></span></span>
                <span class="sidebar-text">Ver clientes</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="sidebar-icon"><span class="fas fa-plus"></span></span>
                <span class="sidebar-text">Añadir comentario</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

     
      <li class="nav-item">
        <a href="{{route('paises')}}" class="nav-link">
          <span class="sidebar-icon"><span class="fas fa-flag"></span></span>
          <span class="sidebar-text">Elegir ubicación</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="" class="nav-link">
          <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
          <span class="sidebar-text">Configuración</span>
        </a>
      </li>

    </ul>
  </div>
</nav>