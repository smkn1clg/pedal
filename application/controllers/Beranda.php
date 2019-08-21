<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{

		if ( !$this->session->userdata('status') == "login" ) {
			if ( !$this->session->userdata('level') ) {

				$this->load->view('index');

			} else {
				redirect('Proses/prosesBalik');
			}
		} else {
			redirect('Proses/prosesBalik');
		}
	
	}

}
