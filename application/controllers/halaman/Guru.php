<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Guru extends CI_Controller {
	
		public function index()
		{
			if ( $this->session->userdata('status') == "login" ) {
				if ( $this->session->userdata('level') == "guru" ) {

					$this->load->view("halaman/templates/header");
					$this->load->view("halaman/guru/index");
					$this->load->view("halaman/templates/footer");

				} else {
	 				redirect('Beranda');
				}
			} else {
	 			redirect('Beranda');
			}
		}

		public function materi()
		{
			if ( $this->session->userdata('status') == "login" ) {
				if ( $this->session->userdata('level') == "guru" ) {

					$this->load->view("halaman/templates/header");
					$this->load->view("halaman/guru/halaman/video-materi");
					$this->load->view("halaman/templates/footer");

				} else {
	 				redirect('Beranda');
				}
			} else {
	 			redirect('Beranda');
			}
		}
	
	}
	
	/* End of file murid.php */
	/* Location: ./application/controllers/halaman/murid.php */