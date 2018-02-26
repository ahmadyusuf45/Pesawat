<?php 
	/**
	* 
	*/
	class home extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
				if($this->session->userdata('status')!='login'){
				redirect('master');
			}
		}
		function page()
		{
			$data['page'] = 'home';
			$data['folder'] = 'home/';
			$data['pesawat'] = $this->db->get('pesawat')->num_rows();
			$data['bandara'] = $this->db->get('bandara')->num_rows();
			$data['penerbangan'] = $this->db->get('penerbangan')->num_rows();
			$data['booking'] = $this->db->get('booking')->num_rows();
			$this->load->view('index',$data);
		}
	}
 ?>