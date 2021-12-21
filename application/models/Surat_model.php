<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_model extends CI_Model {



    public function get_new()
{
    $record = new stdClass();
    $record ->no_so = '';
    $record ->Nama_Kapal = '';
    $record ->Jenis_Berkas = '';
    $record ->Tanggal = '';
    // $record ->file_path = '';
    // $record ->id_surat = '';
    return $record;
}

    public function get_all_record()
    {
        $query = $this->db->get('surat');
        return $query->result();
    }

	public function simpan_data($data)
	{
        $this->db->insert('surat',$data);
        return $this->db->insert_id();
    }

}
