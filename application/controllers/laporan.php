<?php 
	/**
	* 
	*/
	class laporan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_laporan');
		}
		public function cetak_lap_bulan_booking()
		{
			$bulan = $this->input->post('bulan');
			$tahun = $this->input->post('tahun');
			$data['tmp'] = $this->model_laporan->c_laporan_booking("WHERE month(booking.tgl_booking) = '$bulan' AND year(booking.tgl_booking) = '$tahun'")->result();
			$this->load->view('content/laporan/cetak_lap_booking',$data);
		}
		public function cetak_lap_tanggal_booking()
		{
			$awal = $this->input->post('tgl_awal');
			$akhir = $this->input->post('tgl_akhir');
			$qw = $this->model_laporan->c_laporan_booking("WHERE booking.tgl_booking BETWEEN '$awal' AND '$akhir'");
			$data['tmp'] = $qw->result();
			$this->load->view('content/laporan/cetak_lap_booking',$data);
		}
		public function cetak_lap_tanggal_jadwal()
		{
			$awal = $this->input->post('tgl_awal');
			$akhir = $this->input->post('tgl_akhir');
			$data['tmp'] = $this->model_laporan->c_laporan_jadwal("WHERE penerbangan.tgl_penerbangan BETWEEN '$awal' AND '$akhir'")->result();
			$this->load->view('content/laporan/cetak_lap_jadwal',$data);
		}
		public function cetak_lap_bulan_jadwal()
		{
			$bulan = $this->input->post('bulan');
			$tahun = $this->input->post('tahun');
			$data['tmp'] = $this->model_laporan->c_laporan_jadwal("WHERE month(penerbangan.tgl_penerbangan) = '$bulan' AND year(penerbangan.tgl_penerbangan) = '$tahun'")->result();
			$this->load->view('content/laporan/cetak_lap_jadwal',$data);	
		}
		public function page()
		{
			$page = $this->uri->segment(3);
			$data['page'] = $page;
			$data['folder'] = "laporan/";
			if($page == "laporan_pemesanan"){
				$this->load->view('index',$data);
			}elseif($page == "laporan_jadwal"){
				$this->load->view('index',$data);
			}else{
				$this->load->view('index',$data);
			}
		}
	}
 ?>