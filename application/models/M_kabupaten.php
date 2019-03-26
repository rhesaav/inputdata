<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kabupaten extends CI_Model {

	public function tambahKabupaten($data)
	{
		
		return $this->db->insert('kabupaten', $data); 

	}
	public function lihatKabupaten()
	{
		return $this->db->join('provinsi','provinsi.id_provinsi=kabupaten.id_kabupaten')
						->get('kabupaten')
						->result();	
	}
	public function ambilKabupaten()
	{
		return $this->db->get('kabupaten')->result();	
	}	
	public function detail($a)
	{
		return $this->db->query("SELECT * FROM kabupaten WHERE id_kabupaten = ".$a)->result_array();
	}
	

}

/* End of file M_kabupaten.php */
/* Location: ./application/models/M_kabupaten.php */