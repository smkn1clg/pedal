<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<title>PEDAL &mdash; Pembelajaran Digital</title>

	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="<?=base_url("assets/bootstrap/css/bootstrap.min.css");?>">

	<!-- SWEETALERT -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

	<!-- CSSsini -->
	<link rel="stylesheet" href="<?=base_url("assets/index/aos.css");?>">
	<link rel="stylesheet" href="<?=base_url("assets/index/style.css");?>">

</head>
<body>

	<div class="intro-section" id="home-section">
		<div class="slide-1" style="background-image: url('<?= base_url("assets/img/bgIndex.jpg") ?>');" data-stellar-background-ratio="0.5">
			<div class="container">
				
				<div class="row align-items-center">
					<div class="col-12">
						<div class="utama row align-items-center">
							
							<div class="col-lg-6 mb-4 centerTextMobile">
                <h1 data-aos="fade-up" data-aos-delay="100" style="padding-top: 50px;">
                	PEDAL &mdash; Pembelajaran Digital
                </h1>
                <p class="mb-4 penjelasan" data-aos="fade-up" data-aos-delay="200">
                	<b>PEDAL &mdash; Pembelajaran Digital</b> adalah sebuah aplikasi milik <i>SMK Negeri 1 Cilegon</i> yang berguna untuk para siswa/i <i>SMK Negeri 1 Cilegon</i> yang sedang melaksanakan <i>Praktik Kerja Lapangan (PKL)</i> dalam mengikuti pembelajaran yang sedang dilaksanakan di <i>SMK Negeri 1 Cilegon</i>.
                </p>
              </div>

              <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500" style="padding-bottom: 50px;">
								<?= form_open('proses/prosesLogin'); ?>
									<div class="form-box">
	                  <h3 class="h4 text-black mb-4 centerTextMobile">Login</h3>
	                  <div class="form-group">
	                    <input type="text" class="form-control" placeholder="Username" name="username">
	                  </div>
	                  <div class="form-group">
	                    <input type="password" class="form-control" placeholder="Password" name="password">
	                  </div>
	                  <div class="form-group">
	                    <input type="submit" class="btn btn-primary btn-pill fullBtnMobile pl-4 pr-4" value="Login" target="_blank">
	                  </div>
                  </div>
								<?= form_close() ?>
              </div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- BOOTSTRAP -->
	<script src="<?= base_url("assets/bootstrap/js/jquery-3.3.1.slim.min.js")?>"></script>
	<script src="<?= base_url("assets/bootstrap/js/popper.min.js") ?>"></script>
	<script src="<?= base_url("assets/bootstrap/js/bootstrap.min.js") ?>"></script>

	<!-- JSsini -->
	<script src="<?= base_url("assets/index/aos.js") ?>"></script>
	<script src="<?= base_url("assets/index/main.js") ?>"></script>
</body>
</html>