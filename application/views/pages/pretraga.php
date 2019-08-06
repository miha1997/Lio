<div id="shop-content">
      
  <?php    
    foreach($svaIzdanja as $izdanja){
    $this->load->view("include/auction-preview.inc.php",["auction"=>$auction]);
            
    }
  ?>

</div>
   
