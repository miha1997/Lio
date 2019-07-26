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
            $header_content["controller"] = "Home";
            $header_content["page_title"] = "Welcome to Auction house ™!";
            $header_content["page_icon"] = "star";

            $this->load->view("header.php", $header_content);
            $this->load->view($page, $content);
            $this->load->view("footer.php");
        }

        /**
         * index function, default function called for this contoller
         */
        public function index(){ 
            $content["text"] = "text";            
            $this->loadPageLayout("pages/naslovna.php", $content);
        }

    }

?>