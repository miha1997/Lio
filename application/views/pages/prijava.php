<div class="m-auto">
    <form style="margin-top:20px" class="d-flex justify-content-center" method="post" <?php echo 'action="' .base_url(). 'prijava/potvrdi">'; ?> 
        <fieldset> 
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
            <h2>Пријава</h2>
            <br />

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" maxlength="35" aria-describedby="emailHelp" required oninvalid="this.setCustomValidity('Морате попунити ово поље')"
                    oninput="this.setCustomValidity('')">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Лозинка</label>
                <input type="password" class="form-control" name="password" maxlength="30" required oninvalid="this.setCustomValidity('Морате попунити ово поље')"
                    oninput="this.setCustomValidity('')">
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%">Потврди</button>

        </fieldset>
    </form>
</div>