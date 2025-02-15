<?php
    
    /**
     *@author Mihailo
     * Kontroler za pocetnu stranicu
     */
    class naslovna extends CI_Controller{

        /**
         * constructor for this controller
         */
        public function __construct(){
            parent::__construct();
        }

        /**
         * Ucitava stranu
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

            $this->loadPageLayout("pages/naslovna.php", $content);
        }

        public function izadji(){
            $this->session->unset_userdata("korisnik");  
            $this->session->set_flashdata('SuccessMessage', 'Успешно сте се излоговали!');

            $this->index();
        }

    }

?>