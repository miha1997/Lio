<div class="row">
	<div class="col-sm-10 offset-sm-1">
		<?php
                if(isset($ErrorMessage)){
                    echo '<div class="alert alert-dismissible alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>'. $ErrorMessage. '</strong>
                    </div>';
                    
                    $ErrorMessage = null;
                }

                if(isset($SuccessMessage)){
                    echo '<div class="alert alert-dismissible alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>'. $SuccessMessage. '</strong>
                    </div>';
                    
                    $SuccessMessage = null;
                }
                
        ?>

	    <div class="jumbotron h-auto pb-3 pt-4">
	        <div class="row">
	            <div class="col-sm-7">
	            	<?php
	            		echo '<img src="data:image;base64,'. $izdanje->Slika .'" style="display: block; border:groove;width:100%;height:500px"/>';
	            	?>
	            </div>
	            <div class="col-sm-5 table-responsive fixed-table-body" style="border:groove">
	                <table class="table table-hover table-striped ">
	                    <thead>
	                        <tr>
	                            <th colspan="2" class="bg-active"><h2>Опис</h2></th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                        	<?php
	                        		echo '<td>Наслов: </td>
	                            	<td style="text-align:right">'. $izdanje->Naslov.'</td>';
	                        	?>
	                        </tr>
	                        <tr>
	                            <?php
	                        		echo '<td>Датум изласка: </td>
	                            	<td style="text-align:right">'. $izdanje->DatumIzlaska.'</td>';
	                        	?>
	                        </tr>
	                        <tr>
	                            <?php
	                        		echo '<td>Цена: </td>
	                            	<td style="text-align:right">'. $izdanje->Cena.' дин</td>';
	                        	?>
	                        </tr>
	                        
	                    </tbody>
	                </table>
	                <hr>
	                <?php
	                	echo '<br/>
	                		  <h3>Укратко</h3>
	                		  <hr>
	                		  <p class="h-auto w-auto" overflow="scroll">
	                			'. $izdanje->Opis .'
	                		</p>';
	                ?>
	            </div>
	            	
	            
	        </div>
	    </div>
	</div>
</div>