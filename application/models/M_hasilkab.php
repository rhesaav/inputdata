<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hasilkab extends CI_Model {

	public function ambilKabupaten()
	{
		return $this->db->get('kabupaten')->result();	
	}	
	public function edit_kabupaten()
	{
		$object = array(
			'id_kabupaten' =>$this->input->post('id_kabupaten'),
			'nama_kabupaten' => $this->input->post('nama_kabupaten'),
			'jumlah_penduduk' => $this->input->post('jumlah_penduduk'),
		);
		return $this->db->where('id_kabupaten', $this->input->post('id_kabupaten'))->update('kabupaten', $object);
	}
	public function getKabupatenById($id_provinsi){
		return $this->db->join('provinsi','provinsi.id_provinsi=kabupaten.id_provinsi')
		                ->where('kabupaten.id_provinsi', $id_provinsi)
						->get('kabupaten')
						->result();
	}

}

/* End of file M_hasil.php */
/* Location: ./application/models/M_hasil.php */