<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Murid extends CI_Controller {
	
		public function index()
		{
			
			if ( $this->session->userdata('status') == "login" ) {
				if ( $this->session->userdata('level') == "murid" ) {

					$this->load->view("halaman/templates/header");
					$this->load->view("halaman/murid/index");
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
			$this->load->view("halaman/templates/header");
			$this->load->view("halaman/murid/materi");
			$this->load->view("halaman/templates/footer");
		}
	
	}
	
	/* End of file murid.php */
	/* Location: ./application/controllers/halaman/murid.php */