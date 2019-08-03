<div class="row">
	<div class="col-sm-8 offset-sm-2">
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

	    <div class="jumbotron h-auto pb-2 pt-1">
	        <div class="row">
	            <div class="col-sm-7">
	            	<?php
	            		echo '<img src="data:image;base64,'. $izdanje->Slika .'" class="img-fluid" height="300px" width="100%" style="border:groove" />';
	            	?>
	            </div>
	            <div class="col-sm-5 table-responsive fixed-table-body mt-3">
	                <table class="table table-hover table-striped mt-3">
	                    <thead>
	                        <tr>
	                            <th colspan="2" class="bg-secondary"><h2>Подаци</h2></th>
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
	                            	<td style="text-align:right">'. $izdanje->Cena.'</td>';
	                        	?>
	                        </tr>
	                        <tr>
	                            <?php
	                        		echo '<td>Опис: </td>
	                            	<td style="text-align:right">'. $izdanje->Opis.'</td>';
	                        	?>
	                        </tr>
	                        
	                    </tbody>
	                </table>
	            </div>
	        </div>
	    </div>
	</div>
</div>