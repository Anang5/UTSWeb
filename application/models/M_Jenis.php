<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Jenis extends CI_Model {
	public function getJenis()
	{
		return $this->db->get('jenis_mobil')->result();
	}

	
}
