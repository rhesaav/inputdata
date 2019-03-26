<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasilkab extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_hasilkab', 'hasilkab');
		$this->load->model('M_kabupaten','kabupaten');
	}
	public function index()
	{
		$data['kabupaten'] = $this->kabupaten->ambilKabupaten();
		$this->load->view('tabell_hasilkab', $data);
	}

	public function cek(){
		echo 'ok';
	}

	public function hapus($id_kabupaten)
	{
		if ($this->kabupaten->hapus($id_kabupaten)) {
			$this->session->set_flashdata('pesan', 'Sukses Hapus Data');
		} else {
			$this->session->set_flashdata('pesan', 'buku tidak berhasi dihapus, gagal');
		}
		redirect('hasilkab');
	}
	public function edit_kabupaten($id)
	{
		$data=$this->kabupaten->detail($id);
		echo json_encode($data);
	}
	public function ubah()
	{
		if ($this->hasilkab->edit_kabupaten()) {
			$this->session->set_flashdata('pesan', 'berhasil');
		}
		else{
			$this->session->set_flashdata('pesan', 'gagal');
		}
		redirect('hasilkab','refresh');
	}
	public function getKabupatenByIdProvinsi($id_provinsi)
	{
		$kabupaten = $this->kabupaten->getKabupatenById($id_provinsi);
		foreach($kabupaten as $data){
			echo "
			<tr>
				<td>1</td>
				<td>$data->nama_provinsi</td>
				<td>$data->nama_kabupaten</td>
			</tr>
			";
		}
	}

}

/* End of file Hasil.php */
/* Location: ./application/controllers/Hasil.php */