<?php
    
    /**
     *@author Mihailo
     * Kontroler za pocetnu stranicu
     */
    class kontakt extends CI_Controller{

        /**
         * constructor for this controller
         */
        public function __construct(){
            parent::__construct();
            $this->load->model("Izdanje");
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
            $content["izdanja"] = $this->Izdanje->svaIzdanja();          
            $this->loadPageLayout("pages/Kontakt.php", $content);
        }

    }

?>