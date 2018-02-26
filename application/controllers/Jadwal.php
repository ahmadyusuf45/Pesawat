<?php 
	/**
	* 
	*/
	class jadwal extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_jadwal');
		}
		public function page()
		{
			$page = $this->uri->segment(3);
			$data['page'] = $page;
			$data['folder'] = 'jadwal/';
			if($page == 'jadwal'){
				$data['title'] = "Jadwal Penerbangan";
				$data['tmp'] = $this->model_jadwal->tmp_jadwal()->result();
				$this->load->view('index',$data);
			}else{
				$this->load->view('index',$data);
			}
		}
		public function hapus_jadwal()
		{
			$this->model_jadwal->hapus_penerbangan($_GET['id_penerbangan']);
			$this->model_jadwal->hapus_tarif($_GET['id_penerbangan']);
		}
	}
 ?>