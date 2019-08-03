<?php
	/**
	 *@author Nebojsa
	 * Class for user.
	 */
	class Izdanje extends CI_Model{
		/**
		 * Constructor of this Model
		 */
		public function __construct(){
			parent::__construct();
		}

		public function novoIzdanje($data){
			$this->db->insert("izdanje", $data);

			$insert_id = $this->db->insert_id();
			return  $insert_id;
		}

		public function dohvatiIzdanje($id){
			$this->db->from("izdanje");
			$this->db->where("Id", $id);

			$izdanje = $this->db->get()->row();
			return $izdanje;
		}

	}
	
?>

