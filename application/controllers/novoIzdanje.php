<?php 

    /**
     *@author Mihailo
     * Controller for register.
     */
    class novoIzdanje extends CI_Controller{

        /**
         * constructor for controller
         */
        public function __construct(){
            parent::__construct();

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
            $this->loadPageLayout("pages/novoIzdanje.php");
        }
            
        

        /**
         * function which cheks and handles submit
         */

        public function potvrdi(){
            $data["Naslov"] = $this->input->post("title");
            $data["Opis"] = $this->input->post("description");
            $data["Cena"] = $this->input->post("price");

            $image = addslashes($_FILES['image']['tmp_name']);
            $image = file_get_contents($image);
            $image = base64_encode($image);

            $data["Slika"] = $image;
            $data["DatumIzlaska"] = date("Y/m/d");

            $id = $this->Izdanje->novoIzdanje($data);
            $this->session->set_flashdata('SuccessMessage', 'Успешно сте креирали ново издање!');

            redirect('prikazIzdanja?id=' . $id);
        }

    }


?>