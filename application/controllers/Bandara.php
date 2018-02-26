<?php 
	/**
	* 
	*/
	class Bandara extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_bandara');
		}
		public function page()
		{
			$page = $this->uri->segment(3);
			$data['page'] = $page;
			$data['folder'] = 'bandara/';
			if($page == 'bandara'){
				$data['title'] = "Bandara";
				$data['tmp'] = $this->model_bandara->tmp_bandara()->result();
				$this->load->view('index',$data);
			}else if($page == 'f_bandara'){
				$data['title'] = "Form Bandara";
				$f_bandara = $this->uri->segment(4);
				if(empty($f_bandara)){
					$data['status'] = "simpan";
					$data['judul'] = "Input Data Bandara";
					$data['value'] = "Simpan Data";
					$data['open'] = "bandara/simpan_bandara";
					$data['id'] = $this->model_bandara->id_bandara();
					$data['onclick'] = "simpan_bandara()";
				}else{
					$data['status'] = "edit";
					$data['judul'] = "Edit Data Bandara";
					$data['value'] = "Edit Data";
					$data['onclick'] = "edit_bandara()";
					$data['open'] = "bandara/edit_bandara";
					$data['hsl'] = $this->model_bandara->hsl("WHERE id_bandara = '$f_bandara'");
				}
				$this->load->view('content/bandara/f_bandara',$data);
			}else{
				$this->load->view('index',$data);
			}
		}
		public function simpan_bandara()
		{
			$ar = array(
				'id_bandara' =>$this->input->post('id_bandara') ,
				'nama_bandara'=>$this->input->post('nama_bandara'),
				'kota_bandara'=>$this->input->post('kota_bandara'),
				'kode'=>$this->input->post('kode') 
			);
			$this->model_bandara->simpan_bandara($ar);
			$this->session->set_flashdata('success','Berhasil Simpan Data');
			echo "<script>document.location='http://localhost/pesawat/index.php/bandara/page/bandara';</script>";
		}
		public function edit_bandara()
		{
			$id = $this->input->post('id_bandara');
			$ar = array(
				'nama_bandara'=>$this->input->post('nama_bandara'),
				'kota_bandara'=>$this->input->post('kota_bandara'),
				'kode'=>$this->input->post('kode') 
			);
			$this->model_bandara->edit_bandara($id,$ar);
			$this->session->set_flashdata('success','Berhasil Mengedit Data');
			echo "<script>document.location='http://localhost/pesawat/index.php/bandara/page/bandara';</script>";
		}
		public function hapus_bandara($id)
		{
			$this->model_bandara->hapus_bandara($id);
			$this->session->set_flashdata('success','Berhasil Menghapus Data');
			echo "<script>document.location='http://localhost/pesawat/index.php/bandara/page/bandara';</script>";
		}
	}
 ?>