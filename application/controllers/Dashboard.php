<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_sewa'); 
		$this->load->model('M_jenis'); 
	}

	public function index()
	{
		$data['sewa'] = $this->M_sewa->getSewa();
		$data['jenis_mobil'] = $this->M_jenis->getJenis();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template/footer');
	}


	public function tambah()
	{

		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telpon' => $this->input->post('telpon'),
			'jenis_mobil' => $this->input->post('jenis_mobil'),
			'masa_sewa' => $this->input->post('masa_sewa'),
			'harga' => $this->input->post('harga'),

	);

		$this->db->insert('sewa', $data);
		$this->session->set_flashdata('info', 'Tambah Data  Berhasil !');
		redirect('dashboard','refresh');
	}


	public function hapus($idsewa)
	{
		
		$this->M_sewa->hapus($idsewa);
		$this->session->set_flashdata('info', 'Data Berhasil Di Hapus' );
		redirect('dashboard','refresh');
	}

	// public function edit()
	// {
	// 	$data = array(
	// 		'idsewa' => $this->input->post('idsewa'),
	// 		'nama' => $this->input->post('nama'),
	// 		'alamat' => $this->input->post('alamat'),
	// 		'telpon' => $this->input->post('telpon'),
	// 		'jenis_mobil' => $this->input->post('jenis_mobil'),
	// 		'masa_sewa' => $this->input->post('masa_sewa'),
	// 		'harga' => $this->input->post('harga'),

	// 	);

	// 	$this->db->where('idsewa', $this->input->post('idsewa'));
	// 	$this->db->update('sewa', $data);
	// 	$this->session->set_flashdata('info', 'Update Data  Berhasil !');
	// 	redirect('dashboard','refresh');
	// }
	public function update()
	{

		$data = array(
			'idsewa' => $this->input->post('idsewa'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telpon' => $this->input->post('telpon'),
			'jenis_mobil' => $this->input->post('jenis_mobil'),
			'masa_sewa' => $this->input->post('masa_sewa'),
			'harga' => $this->input->post('harga'),

	);
		$this->db->where('idsewa', $this->input->post('idsewa'));
		$this->db->update('sewa', $data);
		$this->session->set_flashdata('info', 'Update Data  Berhasil !');
		redirect('dashboard','refresh');
	}
}
