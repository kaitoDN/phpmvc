<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Surat_model','dbase');	
	}


	public function index()
	{
		$data['record']= $this->dbase->get_all_record();
		
		$this->load->view('template/header.php');
		$this->load->view('surat/surat_view.php',$data);
		$this->load->view('template/footer.php');
	}


	public function created(){

		if($this->input->post()){
			$data = array (
				
				'No_So' => $this->input->post('No_So'),
				'Nama_Kapal' => $this->input->post('Nama_Kapal'),
				'Jenis_Berkas' => $this->input->post('Jenis_Berkas'),
				'Tanggal' => $this->input->post('Tanggal'),
				// 'File_Path' => $this->input->post('File_Path'),
			);
			$insert = $this->dbase->simpan_data($data);
			
			if($insert){
				redirect('Surat/Created');	
			}
			else{
				redirect('surat');
			}
		}

		$data['record'] = $this->dbase->get_new();

		$this->load->view('template/header.php');
		$this->load->view('surat/surat_form.php',$data);
		$this->load->view('template/footer.php');


	}

	public function update($Id_surat){
			
		if($this->input->post()){
			$data = array (
				
				'No_So' => $this->input->post('No_So'),
				'Nama_Kapal' => $this->input->post('Nama_Kapal'),
				'Jenis_Berkas' => $this->input->post('Jenis_Berkas'),
				'Tanggal' => $this->input->post('Tanggal'),
				// 'File_Path' => $this->input->post('File_Path'),
			);
			$insert = $this->dbase->simpan_data($data);
			
			if($insert){
				redirect('Surat/Created');	
			}
			else{
				redirect('surat');
			}
		}
		$this->load->view('template/header.php');
		$this->load->view("surat/surat_form.php");
		$this->load->view('template/footer.php');

	}
}
