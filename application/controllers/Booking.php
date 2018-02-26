<?php 
	/**
	* 
	*/
	class booking extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_booking');
		}
		function cari_penerbangan(){
			$id = $this->input->post('id_tarif');
			$qw = $this->model_booking->c_penerbangan("WHERE tarif_penerbangan.id_tarif = '$id'");
			$hsl = $qw->row_array();
			echo json_encode($hsl);
		}
		function cari_customer(){
			$id = $this->input->post('id_customer');
			$qw = $this->model_booking->c_customer("WHERE id_customer ='$id' ");
			$hsl = $qw->row_array();
			echo json_encode($hsl);
		}
		public function modal_customer()
		{
			$data['tmp'] = $this->model_booking->tmp_customer()->result();
			$this->load->view('content/booking/modal_customer',$data);
		}
		public function page()
		{
			$page = $this->uri->segment(3);
			$data['page'] = $page;
			$data['folder'] = 'booking/';
			if($page == 'booking'){
				$data['tmp'] = $this->model_booking->tmp_booking()->result();
				$this->load->view('index',$data);
			}else if($page == 'f_booking'){
				$now = date('Y-m-d');
				$data['id'] = $this->model_booking->id_booking();
				$data['id_detail'] = $this->model_booking->id_detail();
				$awal = $this->input->post('asal');
				$tujuan = $this->input->post('tujuan');
				if(!empty($awal)){
				$data['tmp'] = $this->model_booking->tmp_n_jadwal(" WHERE penerbangan.asal = '$awal' AND penerbangan.tujuan = '$tujuan' ")->result();
				}else{
				$data['tmp'] = $this->model_booking->tmp_n_jadwal(" WHERE penerbangan.tgl_penerbangan = '$now' ")->result();
				}
				$this->load->view('index',$data); 
			}else{
				$this->load->view('index',$data);
			}
		}
		public function simpan_booking()
		{
			$status = "TERBAYAR";
			$id_booking = $this->input->post('id_booking');
			$id_customer = $this->input->post('id_customer');
			if(empty($id_customer)){
				$ar_booking = array(
				'id_booking' =>$id_booking,
				'tgl_booking'=>$this->input->post('tgl_booking') ,
				'jml_penumpang'=>$this->input->post('jml_penumpang'),
				'total_tarif'=>$this->input->post('total_tarif'),
				'status_bayar'=>$status
				);
				$this->model_booking->simpan_booking($ar_booking);	
			}else{
				$ar_booking = array(
				'id_booking' =>$id_booking ,
				'id_customer'=>$this->input->post('id_customer'),
				'tgl_booking'=>$this->input->post('tgl_booking') ,
				'jml_penumpang'=>$this->input->post('jml_penumpang'),
				'total_tarif'=>$this->input->post('total_tarif'),
				'status_bayar'=>$status
				);
				$this->model_booking->simpan_booking($ar_booking);
			}
			$ar_detail_booking = array(
				'id_detail'=>$this->input->post('id_detail'),
				'id_tarif' =>$this->input->post('id_tarif') ,
				'id_booking'=>$this->input->post('id_booking') 
			);
			$this->model_booking->simpan_detail_booking($ar_detail_booking);
			$id_pesawat = $this->input->post('id_pesawat');
				$ar_pesawat = array(
				'jml_kursi_bisnis'=>$this->input->post('jml_kursi_bisnis'),
				'jml_kursi_ekonomi'=>$this->input->post('jml_kursi_ekonomi')
				);
				$this->model_booking->edit_pesawat($id_pesawat,$ar_pesawat);
		}
		
		public function hapus_booking($id_booking,$id_detail)
		{
			$this->model_booking->hapus_booking($id_booking);
			$this->model_booking->hapus_detail_booking($id_booking);
			$this->model_booking->hapus_passenger($id_detail);
			$this->session->set_flashdata('success','Berhasil Menghapus Data');
			echo "<script>document.location='http://localhost/pesawat/index.php/booking/page/booking';</script>";
		}
	}
 ?>