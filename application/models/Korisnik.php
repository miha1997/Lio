<?php
	/**
	 *@author Nebojsa
	 * Class for user.
	 */
	class Korisnik extends CI_Model{
		/**
		 * Constructor of this Model
		 */
		public function __construct(){
			parent::__construct();
		}

		public function postojeciKorisnik( $email){
			$this->db->from("korisnik");
			$this->db->where("Mail", $email);

			$korisnik = $this->db->get()->row();

			if ($korisnik != null ){
				return true;
			}
			else{
				return false;
			}
		}

		public function noviKorsnik($data){
			$this->db->insert("korisnik", $data);
		}

		public function sviKorisnici(){
			$this->db->from("korisnik");
			return  $this->db->get()->result();
		}

		public function proveriKorisnika($email, $password){
			$this->db->from("korisnik");
			$this->db->where("Mail", $email);
			
			$korisnik = $this->db->get()->row();

			if($korisnik != null && password_verify($password, $korisnik->Lozinka)){
				return $korisnik;
			}
			else{
				return null;
			}
		}

	}
	
?>

