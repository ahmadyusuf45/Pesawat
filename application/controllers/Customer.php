<?php 
	/**
	* 
	*/
	class Customer extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_customer');
		}
		public function page()
		{
			$page = $this->uri->segment(3);
			$data['page'] = $page;
			$data['folder'] = 'customer/';
			if ($page == 'customer') {
				$data['title'] = "Customer";
				$data['tmp'] = $this->model_customer->tmp_customer()->result();
				$this->load->view('index',$data);
			}else if($page == 'f_customer') {
				$data['title'] = "Form Customer";
				$f_customer = $this->uri->segment(4);
				if(empty($f_customer)){
					$data['status'] = "simpan";
					$data['judul'] = "Input Data Customer";
					$data['value'] = "Simpan Data";
					$data['onclick'] = "simpan_customer()";
					$data['open'] = "customer/simpan_customer";
					$data['id'] = $this->model_customer->id_customer();
				}else{
					$data['status'] = "edit";
					$data['judul'] = "Edit Data Customer";
					$data['value'] = "Edit Data";
					$data['open'] = "customer/edit_customer";
					$data['onclick'] = "edit_customer()";
					$data['hsl'] = $this->model_customer->hsl("WHERE id_customer = '$f_customer'");
				}
				$this->load->view('content/customer/f_customer',$data);
			}else{
				$this->load->view('index',$data);
			}
		}
		public function simpan_customer()
		{
			$ar = array(
				'id_customer' =>$this->input->post('id_customer') ,
				'nama'=>$this->input->post('nama'),
				'email'=>$this->input->post('email'),
				'negara'=>$this->input->post('negara'),
				'kota'=>$this->input->post('kota')
			);
			$this->model_customer->simpan_customer($ar);
			$this->session->set_flashdata('success','Berhasil Simpan Data');
			echo "<script>document.location='http://localhost/pesawat/index.php/customer/page/customer';</script>";
		}
		public function edit_customer()
		{
			$id = $this->input->post('id_customer');
			$ar = array(
			 	'nama'=>$this->input->post('nama'),
				'email'=>$this->input->post('email'),
				'negara'=>$this->input->post('negara'),
				'kota'=>$this->input->post('kota')
			);
			$this->model_customer->edit_customer($id,$ar);
			$this->session->set_flashdata('success','Berhasil Mengedit Data');
			echo "<script>document.location='http://localhost/pesawat/index.php/customer/page/customer';</script>";
		}
		public function hapus_customer($id)
		{
			$this->model_customer->hapus_customer($id);
			$this->session->set_flashdata('success','Berhasil Menghapus Data');
			echo "<script>document.location='http://localhost/pesawat/index.php/customer/page/customer';</script>";
		}
	}
 ?>