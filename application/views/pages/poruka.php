<div class="m-auto">
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
</div>