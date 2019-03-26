<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabupaten extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kabupaten', 'kabupaten');		
		$this->load->model('M_provinsi','provinsi');
	}

	public function index()
	{
		$data['provinsi'] = $this->provinsi->ambilProvinsi();
		$this->load->view('inputt_kabupaten', $data);
	}
	public function simpanKabupaten()
	{
		$data = array(
			'id_provinsi' => $this->input->post('id_provinsi'),
			'nama_kabupaten' => $this->input->post('nama_kabupaten'),
			 'jumlah_penduduk' => $this->input->post('jumlah_penduduk') 
		);
		echo $this->kabupaten->tambahKabupaten($data);
		redirect('kabupaten','refresh');

	}

}

/* End of file Kabupaten.php */
/* Location: ./application/controllers/Kabupaten.php */