<?php 
	/**
	* 
	*/
	class model_pesawat extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function tmp_pesawat()
		{
			return $this->db->get('pesawat');
		}
		public function hsl($prop)
		{
			return $this->db->query("SELECT * FROM pesawat $prop");
		}
		public function id_pesawat()
		{
			$qr = $this->db->query("SELECT max(id_pesawat) as maxKode FROM pesawat");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "PSW";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		public function simpan_pesawat($value)
		{
			return $this->db->insert('pesawat',$value);
		}
		public function edit_pesawat($where,$value)
		{
			$this->db->where('id_pesawat',$where);
			return $this->db->update('pesawat',$value);
		}
		public function hapus_pesawat($where)
		{
			$this->db->where('id_pesawat',$where);
			return $this->db->delete('pesawat');
		}
	}
 ?>