<div class="wrapper">

  <!-- SIDEBAR -->
  <div class="sidebar" data-color="purple" data-background-color="black" data-image="<?= base_url("assets/img/bgIndex.jpg") ?>">

    <!-- LOGO -->
    <div class="logo">
      <a href="#" class="simple-text logo-normal">
        Pembelajaran Digital
      </a>
    </div>
    
    <!-- MENU -->
    <div class="sidebar-wrapper">
      <ul class="nav">
        
        <li class="nav-item active">
          <a class="nav-link" href="#">
            <i class="material-icons">dashboard</i>
            <p>Halaman Utama</p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="material-icons">play_circle_filled</i>
            <p>Video Materi</p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="material-icons">description</i>
            <p>Daftar Tugas</p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="material-icons">import_contacts</i>
            <p>Daftar Pelajaran</p>
          </a>
        </li>
        
      </ul>
    </div>

  </div>

  <!-- HALAMAN UTAMA -->
  <div class="main-panel">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <span class="navbar-brand">Halaman Utama</span>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">account_circle</i>
                <span>
                  <?= $this->session->userdata('nama'); ?>
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">PROFIL</a>
                <a class="dropdown-item" href="<?= site_url('proses/prosesLogout'); ?>">KELUAR</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- KONTEN -->
    <div class="content">
      <div class="container-fluid">
        
        

      </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
      <div class="container-fluid">
        <nav class="float-left">
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, made with <i class="material-icons">favorite</i> by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
        </div>
      </div>
    </footer>

  </div>

</div>