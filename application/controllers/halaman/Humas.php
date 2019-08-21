<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Humas extends CI_Controller {
	
		public function index()
		{
			if ( $this->session->userdata('status') == "login" ) {
				if ( $this->session->userdata('level') == "humas" ) {

					$this->load->view("halaman/templates/header");
					$this->load->view("halaman/humas/index");
					$this->load->view("halaman/templates/footer");

				} else {
	 				redirect('Beranda');
				}
			} else {
	 			redirect('Beranda');
			}
		}

		public function tambah_akun()
		{
			if ( $this->session->userdata('status') == "login" ) {
				if ( $this->session->userdata('level') == "humas" ) {

					$this->load->view("halaman/templates/header");
					$this->load->view("halaman/humas/halaman/tambah-akun");
					$this->load->view("halaman/templates/footer");

				} else {
	 				redirect('Beranda');
				}
			} else {
	 			redirect('Beranda');
			}
		}

		public function daftar_murid()
		{
			if ( $this->session->userdata('status') == "login" ) {
				if ( $this->session->userdata('level') == "humas" ) {

					$this->load->view("halaman/templates/header");
					$this->load->view("halaman/humas/halaman/daftar-murid");
					$this->load->view("halaman/templates/footer");

				} else {
	 				redirect('Beranda');
				}
			} else {
	 			redirect('Beranda');
			}
		}

		// PROSES HUMAS
		public function proses_tambahAkun()
		{
			
		}
	
	}
	
	/* End of file humas.php */
	/* Location: ./application/controllers/halaman/humas.php */