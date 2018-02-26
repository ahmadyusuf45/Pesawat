<?php 
	/**
	* 
	*/
	class model_passenger extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function simpan_passenger($value)
		{
			return $this->db->insert('passenger',$value);
		}
		public function c_detail($prop)
		{
			return $this->db->query("SELECT * FROM booking INNER JOIN detail_booking on booking.id_booking=detail_booking.id_booking INNER JOIN tarif_penerbangan on detail_booking.id_tarif=tarif_penerbangan.id_tarif INNER JOIN penerbangan on tarif_penerbangan.id_penerbangan=penerbangan.id_penerbangan INNER JOIN pesawat ON penerbangan.id_pesawat = pesawat.id_pesawat INNER JOIN bandara ON bandara.id_bandara=penerbangan.id_bandara $prop");
		}
		public function c_tiket($prop)
		{
			return $this->db->query("SELECT * FROM booking INNER JOIN detail_booking on booking.id_booking=detail_booking.id_booking INNER JOIN tarif_penerbangan on detail_booking.id_tarif=tarif_penerbangan.id_tarif INNER JOIN penerbangan on tarif_penerbangan.id_penerbangan=penerbangan.id_penerbangan INNER JOIN pesawat ON penerbangan.id_pesawat = pesawat.id_pesawat INNER JOIN bandara ON bandara.id_bandara=penerbangan.id_bandara INNER JOIN passenger ON detail_booking.id_detail = passenger.id_detail $prop");
		}
		public function c_pesawat($prop)
		{
			return $this->db->query("SELECT * FROM booking INNER JOIN detail_booking on booking.id_booking=detail_booking.id_booking INNER JOIN tarif_penerbangan on detail_booking.id_tarif=tarif_penerbangan.id_tarif INNER JOIN penerbangan on tarif_penerbangan.id_penerbangan=penerbangan.id_penerbangan INNER JOIN pesawat ON penerbangan.id_pesawat = pesawat.id_pesawat INNER JOIN bandara ON bandara.id_bandara=penerbangan.id_bandara INNER JOIN passenger ON detail_booking.id_detail = passenger.id_detail $prop");
		}
		public function id_bis()
		{
			$qr = $this->db->query("SELECT max(nomor_kursi) as maxKode FROM passenger");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$char = "BIS";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		public function id_eko()
		{
			$qr = $this->db->query("SELECT max(nomor_kursi) as maxKode FROM passenger");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$char = "EKO";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
	}
 ?>