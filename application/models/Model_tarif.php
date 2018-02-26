<?php 
	/**
	* 
	*/
	class model_tarif extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function tmp_tarif()
		{
			return $this->db->query("SELECT * FROM penerbangan INNER JOIN pesawat ON penerbangan.id_pesawat  = pesawat.id_pesawat INNER JOIN tarif_penerbangan ON penerbangan.id_penerbangan = tarif_penerbangan.id_penerbangan INNER JOIN bandara ON penerbangan.id_bandara = bandara.id_bandara");
		}
		public function tmp_penerbangan()
		{
			return $this->db->query("SELECT * FROM penerbangan INNER JOIN bandara ON penerbangan.id_bandara = bandara.id_bandara INNER JOIN pesawat ON penerbangan.id_pesawat = pesawat.id_pesawat ");
		}
		public function c_penerbangan($prop)
		{
			return $this->db->query("SELECT * FROM penerbangan INNER JOIN bandara ON penerbangan.id_bandara = bandara.id_bandara INNER JOIN pesawat ON penerbangan.id_pesawat = pesawat.id_pesawat $prop");
		}
		public function id_tarif()
		{
			$qr = $this->db->query("SELECT max(id_tarif) as maxKode FROM tarif_penerbangan");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "TRF";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		public function simpan_tarif($value)
		{
			return $this->db->insert('tarif_penerbangan',$value);
		}
		public function hapus_tarif($where)
		{
			$this->db->where('id_tarif',$where);
			return $this->db->delete('tarif_penerbangan');
		}
	}
 ?>