<?php 

    /**
     *@author Mihailo
     * Controller for register.
     */
    class prijava extends CI_Controller{

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
            $SuccessMessage = $this->session->flashdata('SuccessMessage');

            if($ErrorMessage != null){
                $content["ErrorMessage"] = $ErrorMessage;
                
                if(isset($_SESSION['ErrorMessage'])){
                    unset($_SESSION['ErrorMessage']);
                }
                
            }

            if($SuccessMessage != null){
                $content["SuccessMessage"] = $SuccessMessage;
                
                if(isset($_SESSION['SuccessMessage'])){
                    unset($_SESSION['SuccessMessage']);
                }
            }

            $this->loadPageLayout("pages/prijava.php", $content);
            
        }

        /**
         * function which cheks and handles submit
         */

        public function potvrdi(){
            $email = $this->input->post("email");
            $password = $this->input->post("password");

            $korisnik = $this->Korisnik->proveriKorisnika($email, $password);

            if($korisnik == null){
                $this->session->set_flashdata('ErrorMessage', 'Адреса или лозинка нису тачни!');
                redirect("prijava");
            }

            $this->session->set_userdata("korisnik", $korisnik);
            $this->session->set_flashdata('SuccessMessage', 'Успешно сте се улоговали!');
            redirect("naslovna");
        }

    }


?>