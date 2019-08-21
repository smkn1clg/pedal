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
        
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('halaman/humas'); ?>">
            <i class="material-icons">dashboard</i>
            <p>Halaman Utama</p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="material-icons">people</i>
            <p>Daftar Guru</p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('halaman/humas/daftar_murid'); ?>">
            <i class="material-icons">school</i>
            <p>Daftar Murid</p>
          </a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="<?= site_url('halaman/humas/tambah_akun'); ?>">
            <i class="material-icons">person_add</i>
            <p>Tambah Akun</p>
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
          <span class="navbar-brand">Tambah Akun</span>
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
        
        <div class="row">
          <div class="col">
            
            <?= form_open('halaman/humas/proses_tambahAkun'); ?>
              <div class="card">

                <div class="card-header card-header-primary">
                  <h4 class="card-title text-center font-weight-bold">PEDAFTARAN AKUN</h4>
                </div>

                <div class="row p-4">
                  
                  <div class="col-md-6 mt-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nama Lengkap</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="col-md-6 mt-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-6 mt-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Status</label>
                      <input type="text" class="form-control" list="status">
                      <datalist id="status">
                        <option value="Humas">
                        <option value="Guru">
                        <option value="Murid">
                      </datalist>
                    </div>
                  </div>

                  <div class="col-md-6 mt-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">NIP/NISN</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-6 mt-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Username</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-6 mt-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Password</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-12 mt-3">
                    <input type="submit" value="TAMBAH AKUN" class="btn btn-primary">
                  </div>
                
                </div>
              
              </div>
            <?= form_close(); ?>


          </div>
        </div>

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