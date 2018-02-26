<?php 
	/**
	* 
	*/
	class tarif extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_tarif');
		}
		public function tmp_penerbangan()
		{
			$data['tmp'] = $this->model_tarif->tmp_penerbangan()->result();
			$this->load->view('content/tarif/modal_penerbangan',$data);
		}
		public function cari_penerbangan()
		{
			$id_penerbangan = $this->input->post('id_penerbangan');
			$tm = $this->model_tarif->c_penerbangan("WHERE penerbangan.id_penerbangan = '$id_penerbangan'");
			$hsl = $tm->row();
			$ar = array('type_pesawat'=>$hsl->type_pesawat,'kota_bandara'=>$hsl->kota_bandara,'tgl_penerbangan'=>$hsl->tgl_penerbangan,'asal'=>$hsl->asal,'tujuan'=>$hsl->tujuan,'jam_berangkat'=>$hsl->jam_berangkat,'jam_tiba'=>$hsl->jam_tiba);
			echo json_encode($ar);
		}
		public function page()
		{
			$page = $this->uri->segment(3);
			$data['page'] = $page;
			$data['folder'] = 'tarif/';
			if($page == 'tarif'){
				$data['title'] = "Tarfi Penerbangan";
				$data['tmp'] = $this->model_tarif->tmp_tarif()->result();
				$this->load->view('index',$data);
			}else if($page == 'f_tarif'){
				$data['title'] = "Form Tarfi Penerbangan";
				$data['id'] = $this->model_tarif->id_tarif();
				$this->load->view('index',$data);
			}else{
				$this->load->view('index',$data);
			}
		}
		public function simpan_tarif()
		{
			$ar = array(
				'id_tarif'=>$this->input->post('id_tarif'),
				'kelas'=>$this->input->post('kelas'),
				'id_penerbangan'=>$this->input->post('id_penerbangan'),
				'tarif'=>$this->input->post('tarif')
			);
			$this->model_tarif->simpan_tarif($ar);
			$this->session->set_flashdata('success','Berhasil Simpan Data');
			echo "<script>document.location='http://localhost/pesawat/index.php/tarif/page/tarif';</script>";
		}
		public function hapus_tarif($id)
		{
			$this->model_tarif->hapus_tarif($id);	
			$this->session->set_flashdata('success','Berhasil Menghapus Data');
			echo "<script>document.location='http://localhost/pesawat/index.php/tarif/page/tarif';</script>";
		}
	}
 ?>