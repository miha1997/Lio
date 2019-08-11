<div class="m-auto">
  <div class="search-pagination">
            <div class="search-bar">
                <input type="search" name="search-pending" onkeyup="search('pending')" placeholder="Упишите наслов или аутора...">
            </div>

            <div class="pagination">
              <button id="prev-pending" onclick = "previousPage('pending')">❮</button>
              <button id="next-pending" onclick="nextPage('pending')">❯</button>
            </div>
    </div>

    <hr> 
    <br>   
  <?php    
    foreach($izdanja as $izdanje){
    $this->load->view("pages/jednoIzdanje.php",["izdanje"=>$izdanje]);
            
    }
  ?>

</div>

<script>
    var globalData = new Array();
    globalData["izdanja"] = JSON.parse('<?php echo json_encode($izdanja); ?>');

    var currentPage = new Array();
    currentPage["izdanja"] = 1;

    var numberOfPages = new Array();
    numberOfPages["izdanja"] = Math.ceil(globalData["izdanja"].length / 6);
</script>

<script src="<?php echo base_url() . 'assets/js/pagination.js' ?>"></script>

<script>
    loadTable("izdanja", globalData);
</script>
   
