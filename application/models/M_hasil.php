<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hasil extends CI_Model {

	public function ambilProvinsi()
	{
		return $this->db->get('provinsi')->result();	
	}	
	public function edit_provinsi()
	{
		$object = array(
			'nama_provinsi' => $this->input->post('nama_provinsi'),
		);

		return $this->db->where('id_provinsi', $this->input->post('id_provinsi'))->update('provinsi', $object);
	} 

}

/* End of file M_hasil.php */
/* Location: ./application/models/M_hasil.php */