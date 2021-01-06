<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class singkronisasi_model extends CI_Model {
    public function tampilSingkronisasi()
    {  
        $this->db->select('tbl_singkron.*');
        return $this->db->get('tbl_singkron')->result();
    }
    public function tambahDataSingkron(){
		$data=[
			'kode'=>$this->input->post('kode', true),
            'nik'=>$this->input->post('nik', true),
            'no_kk'=>$this->input->post('no_kk', true),
            'nama'=>$this->input->post('nama', true),
            'email'=>$this->input->post('email', true),
            'wa'=>$this->input->post('wa', true),
            'tgl_terima'=>$this->input->post('tgl_terima', true),
		];
	$this->db->insert('tbl_singkron', $data);
    }
}

/* End of file ModelName.php */
?>