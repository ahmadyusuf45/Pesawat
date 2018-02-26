<?php 
	/**
	* 
	*/
	class passenger extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_passenger');
		}
		public function passenger($kode)
		{
			$qw = $this->model_passenger->c_detail("WHERE detail_booking.id_detail = '$kode'");
			$data['tmp'] = $qw->result();
			$data['item'] = $qw;
			$data['page'] = "passenger";
			$data['folder'] = "passenger/";
			$data['bis'] = $this->model_passenger->id_bis();
			$data['eko'] = $this->model_passenger->id_eko();
			$this->load->view('index',$data);
		}
		public function simpan_passenger()
		{
			$limit = $this->input->post('jml_penumpang');
			for ($i=0; $i < $limit ; $i++) { 
			$id_detail = $_POST['id_detail'][$i];
			$nama_passenger = $_POST['nama_passenger'][$i];
			$nomor_kursi = $_POST['nomor_kursi'][$i];
			$ar = array(
				'id_detail'=>$id_detail,
				'nama_passenger' =>$nama_passenger ,
				'nomor_kursi'=>$nomor_kursi ,
			);
			$this->model_passenger->simpan_passenger($ar);
			}
			echo "<script>document.location='http://localhost/pesawat/index.php/booking/page/booking';</script>";
		}
		public function tiket($kode)
		{
			$qw = $this->model_passenger->c_tiket("WHERE detail_booking.id_detail = '$kode'");
			$data['tmp'] = $qw->result();
			$data['item'] = $qw;
			$this->load->view('content/passenger/tiket',$data);
		}
		public function modal_kursi($id_penerbangan,$to)
		{
			$qw = $this->model_passenger->c_pesawat("WHERE penerbangan.id_penerbangan = '$id_penerbangan' ");
			$data['tmp'] = $qw->result();
			$data['item'] = $qw;
			$data['to'] = $to;
			$this->load->view('content/passenger/modal_kursi',$data);
		}
	}
 ?>