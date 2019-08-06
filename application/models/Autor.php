<?php
	/**
	 *@author Mihailo
	 * Class for user.
	 */
	class Autor extends CI_Model{
		/**
		 * Constructor of this Model
		 */
		public function __construct(){
			parent::__construct();
		}

		public function dodajAutora($name){
			$data["Ime"] = $name;
			$data["BrojIzdanja"] = 0;
 
			$this->db->insert("autor", $data);
		}

		

	}
	
?>

