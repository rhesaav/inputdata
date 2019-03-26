<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_provinsi extends CI_Model {
 
	public function tambahProvinsi($data)
	{
		return $this->db->insert('provinsi', $data);
	}
	public function ambilProvinsi()
	{
		return $this->db->get('provinsi')->result();	
	}	
	public function hapus($id_provinsi)
	{
		$this->db->where('id_provinsi', $id_provinsi)->delete('kabupaten');
		return $this->db->where('id_provinsi', $id_provinsi)->delete('provinsi');
	}
	public function editProvinsi($nama_file)
	{
		if ($nama_file == '') {
			$object = array(
			'nama_provinsi'=>$this->input->post('nama_provinsi')
			);
		}
		else{
			$object = array(
			'nama_provinsi'=>$this->input->post('nama_provinsi')
		);
		}
		return $this->db->where('id_buku', $this->input->post('id_buku'))->update('buku', $object);
	}
	public function detail($a)
	{
		return $this->db->where('id_provinsi',$a)->get('provinsi')->result();
	}
	

}

/* End of file M_provinsi.php */
/* Location: ./application/models/M_provinsi.php */