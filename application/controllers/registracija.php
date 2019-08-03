<?php 

    /**
     *@author Mihailo
     * Controller for register.
     */
    class registracija extends CI_Controller{

        /**
         * constructor for controller
         */
        public function __construct(){
            parent::__construct();

            $this->load->model("Korisnik");

            if ($this->session->has_userdata("korisnik")){
                redirect("poruka/StranicaNijePronadjena");
            }
        }

        /**
         * Loads a page layout.
         *
         * @param      string  $page     The page
         * @param      array   $content  The content
         */
        private function loadPageLayout($page, $content=[]){

            $this->load->view("header.php");
            $this->load->view($page, $content);
            $this->load->view("footer.php");

        } 

        /**
         * index function, default function called for this contoller
         */
        public function index(){
            $content = [];

            $ErrorMessage = $this->session->flashdata('ErrorMessage');
            if($ErrorMessage != null){
                $content["ErrorMessage"] = $ErrorMessage;
                
                if(isset($_SESSION['ErrorMessage'])){
                    unset($_SESSION['ErrorMessage']);
                }

            }
            $this->loadPageLayout("pages/registracija.php", $content);
            
        }

        /**
         * function which cheks and handles submit
         */

        public function potvrdi(){
            $data["Ime"] = $this->input->post("name");
            $data["Prezime"] = $this->input->post("surname");
            $data["Mail"] = $this->input->post("email");
            $data["Lozinka"] = password_hash($this->input->post("password"), PASSWORD_DEFAULT);
            $data["Rang"] = 1;

            $postoji = $this->Korisnik->postojeciKorisnik($data["Mail"]);

            if($postoji){
                $this->session->set_flashdata('ErrorMessage', 'Већ постоји корисник са том адресом!');
                redirect("registracija");
            }
            else{
                $this->Korisnik->noviKorsnik($data);

                $this->session->set_flashdata('SuccessMessage', 'Успешно сте се регистровали!');
                redirect("prijava");
            }
        }

    }


?>