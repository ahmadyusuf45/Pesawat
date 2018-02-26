<?php 
	/**
	* 
	*/
	class model_laporan extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function c_laporan_booking($prop)
		{
			return $this->db->query("SELECT * FROM booking INNER JOIN detail_booking on booking.id_booking=detail_booking.id_booking INNER JOIN tarif_penerbangan on detail_booking.id_tarif=tarif_penerbangan.id_tarif INNER JOIN penerbangan on tarif_penerbangan.id_penerbangan=penerbangan.id_penerbangan INNER JOIN pesawat ON penerbangan.id_pesawat = pesawat.id_pesawat INNER JOIN bandara ON bandara.id_bandara=penerbangan.id_bandara $prop");
		}
		public function c_laporan_jadwal($prop)
		{
			return $this->db->query("SELECT * FROM penerbangan INNER JOIN bandara ON penerbangan.id_bandara = bandara.id_bandara INNER JOIN pesawat ON penerbangan.id_pesawat = pesawat.id_pesawat INNER JOIN tarif_penerbangan ON tarif_penerbangan.id_penerbangan = penerbangan.id_penerbangan $prop");
		}
	}
 ?>