<?php 
	/**
	* 
	*/
	class model_customer extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function tmp_customer()
		{
			return $this->db->get('customer');
		}
		public function hsl($prop)
		{
			return $this->db->query("SELECT * FROM customer $prop");
		}
		public function id_customer()
		{
			$qr = $this->db->query("SELECT max(id_customer) as maxKode FROM customer");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "CTR";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		public function simpan_customer($value)
		{
			return $this->db->insert('customer',$value);
		}
		public function edit_customer($where,$value)
		{
			$this->db->where('id_customer',$where);
			return $this->db->update('customer',$value);
		}
		public function hapus_customer($where)
		{
			$this->db->where('id_customer',$where);
			return $this->db->delete('customer');
		}
	}
 ?>