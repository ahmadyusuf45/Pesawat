<?php 
	/**
	* 
	*/
	class model_penerbangan extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function tmp_bandara()
		{
			return $this->db->get('bandara');
		}
		public function tmp_pesawat()
		{
			return $this->db->get('pesawat');
		}
		public function tmp_penerbangan()
		{
			return $this->db->query("SELECT * FROM penerbangan INNER JOIN bandara ON penerbangan.id_bandara = bandara.id_bandara INNER JOIN pesawat ON penerbangan.id_pesawat = pesawat.id_pesawat ");
		}
		public function c_pesawat($prop)
		{
			return $this->db->query("SELECT * FROM pesawat $prop");
		}
		public function c_bandara($prop)
		{
			return $this->db->query("SELECT * FROM bandara $prop");
		}
		public function id_penerbangan()
		{
			$qr = $this->db->query("SELECT max(id_penerbangan) as maxKode FROM penerbangan");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "PBN";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		public function simpan_penerbangan($value)
		{
			return $this->db->insert('penerbangan',$value);
		}
		public function hapus_penerbangan($where)
		{
			$this->db->where('id_penerbangan',$where);
			return $this->db->delete('penerbangan');
		}
	}
 ?>