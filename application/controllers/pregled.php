<?php 

    /**
     *@author Mihailo
     * Controller for register.
     */
    class pregled extends CI_Controller{

        /**
         * constructor for controller
         */
        public function __construct(){
            parent::__construct();

            $this->load->model("Korisnik");
             $this->load->model("Obavestenje");
            $this->load->model("Autor");

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

            $this->loadPageLayout("pages/pregled.php", $content);
            
        }

        /**
         * function which cheks and handles submit
         */

        public function potvrdiAutor(){
            $name = $this->input->post("name");
            $this->Autor->dodajAutora($name);

            $this->session->set_flashdata('SuccessMessage', 'Успешно сте се додали новог аутора!');
            redirect("pregled");
        }

        public function potvrdiObavestenje(){
            $data["Naslov"] = $this->input->post("title");
            $data["Tekst"] = $this->input->post("text");
            $this->Obavestenje->dodajObavestenje($data);

            $this->session->set_flashdata('SuccessMessage', 'Успешно сте се додали ново обавештење!');
            redirect("pregled");
        }

    }


?>