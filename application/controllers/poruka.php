<?php
    
    /**
     *@author Mihailo
     * Kontroler za pocetnu stranicu
     */
    class poruka extends CI_Controller{

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
            $content["ErrorMessage"] = "Страница није пронађена !";            
            $this->loadPageLayout("pages/poruka.php", $content);
        }

        public function StranicaNijePronadjena(){          
            $this->index();
        }

        public function UspesnoLogovanje(){          
             $content["SuccessMessage"] = "Успешно сте се улоговали !";            
            $this->loadPageLayout("pages/poruka.php", $content);
        }

    }

?>