<?php 
	/**
	* 
	*/
	class backup extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function page()
		{
			$data['page'] = 'backup';
			$data['folder'] = 'backup/';
			$this->load->view('index',$data);
		}
		public function backup()
		{
			// Load the DB utility class
			$this->load->dbutil();
			$prefs = array(
			        'tables'        => array('bandara', 'pesawat','customer','penerbangan','tarif_penerbangan','passenger','booking','detail_booking','login'),   // Array of tables to backup.
			        'ignore'        => array(),                     // List of tables to omit from the backup
			        'format'        => 'txt',                       // gzip, zip, txt
			        'filename'      => 'db_pesawat.sql',              // File name - NEEDED ONLY WITH ZIP FILES
			        'add_drop'      => TRUE,                        // Whether to add DROP TABLE statements to backup file
			        'add_insert'    => TRUE,                        // Whether to add INSERT data to backup file
			        'newline'       => "\n"                         // Newline character used in backup file
			);

			$backup =  $this->dbutil->backup($prefs);
			// Backup your entire database and assign it to a variable

			// Load the file helper and write the file to your server
			$this->load->helper('file');
			write_file('/path/to/db_pesawat.sql', $backup);

			// Load the download helper and send the file to your desktop
			$this->load->helper('download');
			force_download('db_pesawat.sql', $backup);
		}
	}
 ?>