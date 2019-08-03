<?php 

    /**
     *@author Mihailo
     * Controller for register.
     */
    class prikazIzdanja extends CI_Controller{

        private $izdanje = null;

        /**
         * constructor for controller
         */
        public function __construct(){
            parent::__construct();

            $this->load->model("Izdanje");

            $id = $this->input->get("id");
            $this->izdanje = $this->Izdanje->dohvatiIzdanje($id);

            if($this->izdanje == null)
                redirect('poruka/StranicaNijePronadjena');

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

            $content["izdanje"] = $this->izdanje;
            $this->loadPageLayout("pages/prikazIzdanja.php", $content);
            
        }

    }


?>