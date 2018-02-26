 <?php 
	/**
	* 
	*/
	class model_user extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function tmp_jadwal()
		{
			return $this->db->query("SELECT * FROM penerbangan INNER JOIN pesawat ON penerbangan.id_pesawat = pesawat.id_pesawat INNER JOIN bandara ON bandara.id_bandara = penerbangan.id_bandara INNER JOIN tarif_penerbangan ON tarif_penerbangan.id_penerbangan = penerbangan.id_penerbangan");
		}
		public function tmp_c_jadwal($prop)
		{
			return $this->db->query("SELECT * FROM penerbangan INNER JOIN pesawat ON penerbangan.id_pesawat = pesawat.id_pesawat INNER JOIN bandara ON bandara.id_bandara = penerbangan.id_bandara INNER JOIN tarif_penerbangan ON tarif_penerbangan.id_penerbangan = penerbangan.id_penerbangan $prop");
		}
	}
 ?>