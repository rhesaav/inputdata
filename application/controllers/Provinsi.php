<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_provinsi','provinsi');
	}
	public function index()
	{
		$data['provinsi'] = $this->provinsi->ambilProvinsi();
		$this->load->view('inputt_provinsi', $data);
	}

	public function simpan(){
		$data = array(
			'nama_provinsi' => $this->input->post('nama_provinsi')
		);
		echo $this->provinsi->tambahProvinsi($data);
		redirect('provinsi','refresh');
	}
	public function hapus($id_provinsi)
	{
		if ($this->provinsi->hapus($id_provinsi)) {
			$this->session->set_flashdata('pesan', 'Sukses Hapus Data');
		} else {
			$this->session->set_flashdata('pesan', 'buku tidak berhasi dihapus, gagal');
		}
		redirect('tabel_hasil');
	}
	public function edit_provinsi($id)
	{
		$data=$this->provinsi->detail($id);
		echo json_encode($data);
	}
}

/* End of file Provinsi.php */
/* Location: ./application/controllers/Provinsi.php */