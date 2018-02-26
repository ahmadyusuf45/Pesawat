<?php 
	/**
	* 
	*/
	class Pesawat extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_pesawat');
		}
		public function page()
		{
			$page = $this->uri->segment(3);
			$data['page'] = $page;
			$data['folder'] = 'pesawat/';
			if ($page == 'pesawat') {
				$data['title'] = "Pesawat";
				$data['tmp'] = $this->model_pesawat->tmp_pesawat()->result();
				$this->load->view('index',$data);
			}else if($page == 'f_pesawat'){
				$data['title'] = "Form Pesawat";
				$f_pesawat = $this->uri->segment(4);
				if(empty($f_pesawat)){
					$data['status'] = "simpan";
					$data['judul'] = "Input Data Pesawat";
					$data['value'] = "Simpan Data";
					$data['open'] = "pesawat/simpan_pesawat";
					$data['id'] = $this->model_pesawat->id_pesawat();
					$data['onclick'] = "simpan_pesawat()";
				}else{
					$data['status'] = "edit";
					$data['judul'] = "Edit Data Pesawat";
					$data['value'] = "Edit Data";
					$data['open'] = "pesawat/edit_pesawat";
					$data['onclick'] = "edit_pesawat()";
					$data['hsl'] = $this->model_pesawat->hsl("WHERE id_pesawat = '$f_pesawat'");
				}
				$this->load->view('content/pesawat/f_pesawat',$data);
			}else{
				$this->load->view('index',$data);
			}
		}
		public function simpan_pesawat()
		{
			$ar = array(
				'id_pesawat' => $this->input->post('id_pesawat'),
				'type_pesawat' => $this->input->post('type_pesawat'),
				'jml_kursi_ekonomi'=>$this->input->post('jml_kursi_ekonomi'),
				'jml_kursi_bisnis'=>$this->input->post('jml_kursi_bisnis') 
			);
			$this->model_pesawat->simpan_pesawat($ar);
			// echo "<script>alert('Berhasil Simpan Data')</script>";
			$this->session->set_flashdata('success','Berhasil Simpan Data');
			echo "<script>document.location='http://localhost/pesawat/index.php/pesawat/page/pesawat';</script>";
		}
		public function edit_pesawat()
		{
			$id = $this->input->post('id_pesawat');
			$ar = array(
				'type_pesawat' => $this->input->post('type_pesawat'),
				'jml_kursi_ekonomi'=>$this->input->post('jml_kursi_ekonomi'),
				'jml_kursi_bisnis'=>$this->input->post('jml_kursi_bisnis') 
			);
			$this->model_pesawat->edit_pesawat($id,$ar);
			$this->session->set_flashdata('success','Berhasil Mengubah Data');
			echo "<script>document.location='http://localhost/pesawat/index.php/pesawat/page/pesawat';</script>";
		}
		public function hapus_pesawat($id)
		{
			$this->model_pesawat->hapus_pesawat($id);
			$this->session->set_flashdata('success','Berhasil Menghapus Data');
			echo "<script>document.location='http://localhost/pesawat/index.php/pesawat/page/pesawat';</script>";
		}
	}
 ?>