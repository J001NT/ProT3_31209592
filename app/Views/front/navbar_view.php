<!--navegacion-->
<?php
  $session = session();
  $nombre= $session->get('nombre');
  $perfil=$session->get('perfil_id');
  ?>

<!--navegacion-->
<nav class="navbar navbar-expand-lg bg-db-secondary border-hd-bottom border-3">
  <div class="container-fluid">
    <a class="navbar-brand me-auto barra" href="principal">
    <img class="logo" src="assets\img\kanji-kame.png" alt="logo kame house" width="45" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if(session()->perfil_id == 1): ?>
      <div class="btn btn-secondary active btnUser btn-sm">
        <a href="">ADMIN: <?php echo session('nombre'); ?></a>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link link-light" href="registro">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-light" href="login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-light" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
        </li>
      </ul>
      </div>
      <?php elseif(session()->perfil_id == 2): ?>
          <div class="btn btn-info active btnUser btn-sm">
            <a href="">CLIENTE: <?php echo session('nombre'); ?> </a>
          </div>
          <!--NAVBAR PARA CLIENTES que pueden comprar-->

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link link-light" href="quienes_somos">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-light" href="acerca_de">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-light" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
        </li>
      </ul>
    </div>
      <?php else:?>
          <!--NAVBAR PARA CLIENTES no loguedos-->
    
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link link-light" href="quienes_somos">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-light" href="acerca_de">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-light" href="registro">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-light" href="login">Login</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
      <?php endif;?>
    </div>
  </div>
</nav>