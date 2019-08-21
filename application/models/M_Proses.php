<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Proses extends CI_Model {

	public function cekLogin($username, $password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('user_pedal')->row();
	}

}