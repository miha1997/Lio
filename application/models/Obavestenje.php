<?php
	/**
	 *@author Mihailo
	 * Class for user.
	 */
	class Obavestenje extends CI_Model{
		/**
		 * Constructor of this Model
		 */
		public function __construct(){
			parent::__construct();
		}

		public function dodajObavestenje($data){
 
			$this->db->insert("obavestenje", $data);
		}

		

	}
	
?>

