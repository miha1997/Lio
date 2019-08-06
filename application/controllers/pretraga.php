<?php 

    /**
     *@author Mihailo
     * Controller for register.
     */
    class pretraga extends CI_Controller{

        /**
         * constructor for controller
         */
        public function __construct(){
            parent::__construct();

            $this->load->model("Korisnik");
            $this->load->model("Izdanje");

            $korisnik = $this->session->userdata("korisnik");

            if ($korisnik == null || $korisnik->Rang < 2){
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

            $content["izdanja"] = $this->Izdanje->svaIzdanja();
            $this->loadPageLayout("pages/pretraga.php", $content);
            
        }

    }


?>