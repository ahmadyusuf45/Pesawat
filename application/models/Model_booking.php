<?php 
	/**
	* 
	*/
	class model_booking extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function tmp_detail_booking()
		{
			return $this->db->query("SELECT * FROM detail_booking INNER JOIN tarif_penerbangan ON tarif_penerbangan.id_tarif = detail_booking.id_tarif INNER JOIN booking ON booking.id_booking = detail_booking.id_booking");
		}
		public function tmp_n_jadwal ($prop)
		{
			return $this->db->query("SELECT * FROM penerbangan INNER JOIN bandara ON penerbangan.id_bandara = bandara.id_bandara INNER JOIN pesawat ON penerbangan.id_pesawat = pesawat.id_pesawat INNER JOIN tarif_penerbangan ON tarif_penerbangan.id_penerbangan = penerbangan.id_penerbangan $prop");
		}
		public function tmp_customer()
		{
			return $this->db->get('customer');
		}
		public function c_penerbangan($prop)
		{
			return $this->db->query("SELECT * FROM penerbangan INNER JOIN bandara ON penerbangan.id_bandara = bandara.id_bandara INNER JOIN pesawat ON penerbangan.id_pesawat = pesawat.id_pesawat INNER JOIN tarif_penerbangan ON tarif_penerbangan.id_penerbangan = penerbangan.id_penerbangan $prop");
		}
		public function c_customer($prop)
		{
			return $this->db->query("SELECT * FROM customer $prop");
		}
		public function simpan_booking($value)
		{
			return $this->db->insert('booking',$value);
		}
		public function simpan_detail_booking($value)
		{
			return $this->db->insert('detail_booking',$value);
		}
		public function hapus_booking($where)
		{
			$this->db->where('id_booking',$where);
			return $this->db->delete('booking');
		}
		public function hapus_detail_booking($where)
		{
			$this->db->where('id_booking',$where);
			return $this->db->delete('detail_booking');
		}
		public function hapus_passenger($where)
		{
			$this->db->where('id_detail',$where);
			return $this->db->delete('passenger');
		}
		public function id_booking()
		{
			$qr = $this->db->query("SELECT max(id_booking) as maxKode FROM booking");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "BKG";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		public function id_detail()
		{
			$qr = $this->db->query("SELECT max(id_detail) as maxKode FROM detail_booking");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "DTL";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		public function edit_pesawat($where,$value)
		{
			$this->db->where('id_pesawat',$where);
			return $this->db->update('pesawat',$value);
		}
		public function simpan_passenger($value)
		{
			return $this->db->insert('passenger',$value);
		}
		public function tmp_booking()
		{
			return $this->db->query('SELECT * FROM booking INNER JOIN detail_booking ON detail_booking.id_booking = booking.id_booking');
		}
	}
 ?>