<?php 
	/**
	* 
	*/
	class Model_bandara extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function tmp_bandara()
		{
			return $this->db->get('bandara');
		}
		public function hsl($prop)
		{
			return $this->db->query("SELECT * FROM bandara $prop");
		}
		public function id_bandara()
		{
			$qr = $this->db->query("SELECT max(id_bandara) as maxKode FROM bandara");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "BDR";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		public function simpan_bandara($value)
		{
			return $this->db->insert('bandara',$value);
		}
		public function edit_bandara($where,$value)
		{
			$this->db->where('id_bandara',$where);
			return $this->db->update('bandara',$value);
		}
		public function hapus_bandara($where)
		{
			$this->db->where('id_bandara',$where);
			return $this->db->delete('bandara');
		}
	}
 ?>