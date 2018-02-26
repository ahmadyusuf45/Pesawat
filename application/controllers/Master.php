<?php 
	class master extends CI_Controller{
		function __construct(){
			parent:: __construct();
			$this->load->model('model_master');
		}
		function index(){
			if($this->session->userdata('status')=='login'){
				redirect('home/page');
			}
			$this->load->view('master');
		}
		function aksi_login(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username' =>$username,
				'password'=>$password
				);
			$cek = $this->model_master->cek_login('login',$where)->num_rows();
			$qw = $this->db->where('username',$username)->get('login');
			$qy = $this->db->query("SELECT * FROM login WHERE username = '$username'");
			$id_login = $qy->row();
			$hsl = $qw->row();
			if($cek > 0 ){
				$data_session=array(
					'nama'=>$username,
					'id'=>$id_login->id_login,
					'status'=>'login',
					'level'=>$hsl->level
					);
				$this->session->set_userdata($data_session);
				$this->session->set_flashdata('success','Selamat Datang Di Ambyah Airline');
				// echo "<script>alert('Selamat Datang $username !')</script>";
					echo "<script>document.location='http://localhost/pesawat/index.php/home/page/home';</script>";
			}else{
				// $this->session->set_flashdata('error','Username atau Password Salah !');
				// echo "<script>alert('Username Dan Password Salah !')</script>";
				$this->load->view('master');
			}
		}
		function logout(){
			$this->session->sess_destroy();
			redirect('master');
		}
	}
 ?>