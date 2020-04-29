<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Sewa extends CI_Model {
	public function getSewa()
	{
		$this->db->select('*, (masa_sewa*harga) AS totalharga');
		return $this->db->get('sewa')->result();
	}

	


	public function hapus($idsewa)
	{
		$this->db->where('idsewa', $idsewa);
		$this->db->delete('sewa');

	}


	
}
