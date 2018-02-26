<?php 
	/**
	* 
	*/
	class penerbangan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_penerbangan');
		}
		public function tmp_bandara()
		{
			$data['tmp'] = $this->model_penerbangan->tmp_bandara()->result();
			$this->load->view('content/penerbangan/modal_bandara',$data);
		}
		public function cari_bandara()
		{
			$id_bandara = $this->input->post('id_bandara');
			$tm = $this->model_penerbangan->c_bandara("WHERE id_bandara  = '$id_bandara'");
			$hsl = $tm->row();
			$ar = array('kota_bandara' =>$hsl->kota_bandara,'kode'=>$hsl->kode,'nama_bandara'=>$hsl->nama_bandara );
			echo json_encode($ar);
		}
		public function tmp_pesawat()
		{
			$data['tmp'] = $this->model_penerbangan->tmp_pesawat()->result();
			$this->load->view('content/penerbangan/modal_pesawat',$data);
		}
		public function cari_pesawat()
		{
			$id_pesawat = $this->input->post('id_pesawat');
			$tm = $this->model_penerbangan->c_pesawat("WHERE id_pesawat = '$id_pesawat'");
			$hsl = $tm->row();
			$ar = array('type_pesawat'=>$hsl->type_pesawat,'jml_kursi_ekonomi'=>$hsl->jml_kursi_ekonomi,'jml_kursi_bisnis'=>$hsl->jml_kursi_bisnis);
			echo json_encode($ar);
		}
		public function page()
		{
			$page = $this->uri->segment(3);
			$data['page'] = $page;
			$data['folder'] = 'penerbangan/';
			if($page == 'penerbangan'){
				$data['title'] = "Penerbangan";
				$data['tmp'] = $this->model_penerbangan->tmp_penerbangan()->result();
				$this->load->view('index',$data);
			}else if($page == 'f_penerbangan'){
				$data['title'] = "Form Penerbangan";
				$data['id'] = $this->model_penerbangan->id_penerbangan();
				$this->load->view('index',$data);
			}else{
				$this->load->view('index',$data);
			}
		}
		public function simpan_penerbangan()
		{
			$ar_penerbangan = array(
				'id_penerbangan' =>$this->input->post('id_penerbangan') ,
				'tgl_penerbangan'=>$this->input->post('tgl_penerbangan'),
				'asal'=>$this->input->post('asal'),
				'tujuan'=>$this->input->post('tujuan'),
				'jam_berangkat'=>$this->input->post('jam_berangkat'),
				'jam_tiba'=>$this->input->post('jam_tiba'),
				'id_bandara'=>$this->input->post('id_bandara'),
				'id_pesawat'=>$this->input->post('id_pesawat')
			);
			$this->model_penerbangan->simpan_penerbangan($ar_penerbangan);
			$this->session->set_flashdata('success','Berhasil Simpan Data');
			echo "<script>document.location='http://localhost/pesawat/index.php/penerbangan/page/penerbangan';</script>";
		}
		public function hapus_penerbangan($id)
		{
			$this->model_penerbangan->hapus_penerbangan($id);
			$this->session->set_flashdata('success','Berhasil Menghapus Data');
			echo "<script>document.location='http://localhost/pesawat/index.php/penerbangan/page/penerbangan';</script>";	
		}
	}
 ?>