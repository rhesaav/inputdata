<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {
	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('M_hasil', 'hasil');
		$this->load->model('M_provinsi','provinsi');
	}
	public function index()
	{
		$data['provinsi'] = $this->provinsi->ambilProvinsi();
		$this->load->view('tabell_hasil', $data);
	}

	public function cek(){
		echo 'ok';
	}

	public function hapus($id_provinsi)
	{
		if ($this->provinsi->hapus($id_provinsi)) {
			$this->session->set_flashdata('pesan', 'Sukses Hapus Data');
		} else {
			$this->session->set_flashdata('pesan', 'buku tidak berhasi dihapus, gagal');
		}
		redirect('hasil');
	}
	public function edit_provinsi($id)
	{
		$data=$this->provinsi->detail($id);
		echo json_encode($data);
	}
	public function ubah()
	{
		if ($this->hasil->edit_provinsi()) {
			$this->session->set_flashdata('pesan', 'berhasil');
		}
		else{
			$this->session->set_flashdata('pesan', 'gagal');
		}
		redirect('hasil','refresh');
	}


}

/* End of file Hasil.php */
/* Location: ./application/controllers/Hasil.php */