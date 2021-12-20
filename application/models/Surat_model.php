<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_model extends CI_Model {


    public function get_all_record()
    {
        
    }

	public function simpan_data($data)
	{
        $this->db->insert('surat',$data);
        return $this->db->insert_id();
    }

}
