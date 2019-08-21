<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

	public function index()
	{
		redirect('Beranda');
	}

	function prosesLogin()
	{

		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);

		$cek = $this->M_Proses->cekLogin($username, $password);
	 	$tes = count($cek);

		if( $tes > 0 ) {

			$dataUser = $this->M_Proses->cekLogin($username, $password);
	 		$levelUser = $dataUser->level;
	 		$namaUser = $dataUser->namaLengkap;
	 		$data = array(
	 			'level' 	=> $levelUser,
	 			'nama'    => $namaUser,
	 			'status'  => "login" 
	 		);
	 		
	 		$this->session->set_userdata($data);

	 		if( $levelUser == "murid") {
				redirect('halaman/murid');
	 		} elseif ( $levelUser == "guru") {
				redirect('halaman/guru');
	 		} elseif ( $levelUser == "humas") {
				redirect('halaman/humas');
			} elseif ( $levelUser == "superadmin") {
				redirect('halaman/superadmin');
	 		} else {
	 			redirect('Beranda');
	 		}

		} else {
	 		redirect('Beranda');
		} 
 
	}

	public function prosesBalik()
	{
		
		if ( $this->session->userdata('status') == "login" ) {
			if( $this->session->userdata('level') == "murid") {
				redirect('halaman/murid');
	 		} elseif ( $this->session->userdata('level') == "guru") {
				redirect('halaman/guru');
	 		} elseif ( $this->session->userdata('level') == "humas") {
				redirect('halaman/humas');
			} elseif ( $this->session->userdata('level') == "superadmin") {
				redirect('halaman/superadmin');
	 		} else {
	 			redirect('Beranda');
	 		}
		} else {
			redirect('Beranda');
		}

	}

	public function prosesLogout()
	{
	 	$this->session->sess_destroy();
	 	redirect('Beranda');
	}

}
