<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
	}


	public function index()
	{
		$this->load->view('template/header.php');
		$this->load->view('surat/surat_view.php');
		$this->load->view('template/footer.php');
	}


	public function created(){

		if($this->input->post()){
			$data = array (
				
				'No_So' => $this->input->post('no_so'),
				'Nama_Kapal' => $this->input->post('Nama_Kapal'),
				'Jenis_Berkas' => $this->input->post('Jenis_Berkas'),
				'Tanggal' => $this->input->post('Tanggal'),
				// 'File_Path' => $this->input->post('File_Path'),
			);
			$insert = $this->dbase->simpan_data($data);
			
			if($insert){
				redirect('Surat');	
			}
			else{
				redirect('created');
			}
		}

		$this->load->view('template/header.php');
		$this->load->view("surat/surat_form.php");
		$this->load->view('template/footer.php');


	}

}
