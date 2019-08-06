<?php
                if(isset($ErrorMessage)){
                    echo '<div class="alert alert-dismissible alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>'. $ErrorMessage. '</strong>
                    </div>';
                    
                    $ErrorMessage = null;
                }

                if(isset($SuccessMessage)){
                    echo '<div class="alert alert-dismissible alert-success m-auto" style="width:50%">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>'. $SuccessMessage. '</strong>
                    </div>';
                    
                    $SuccessMessage = null;
                }
                
            ?>
<form style="margin-top:10px" class="d-flex justify-content-center" method="post" <?php echo 'action="' .base_url(). 'pregled/potvrdiAutor">'; ?> 
        <fieldset> 
            <h2>Нови аутор/библиотека</h2>
            <br />

            <div class="form-group">
                <label>Име / Назив</label>
                <input type="text" class="form-control" name="name" maxlength="50" required oninvalid="this.setCustomValidity('Морате попунити ово поље')"
                    oninput="this.setCustomValidity('')">
            </div>
            
            <button type="submit" class="btn btn-primary" style="width:100%">Потврди</button>

    </fieldset>
</form>

<hr>

<form style="margin-top:10px" class="d-flex justify-content-center" method="post" <?php echo 'action="' .base_url(). 'pregled/potvrdiObavestenje">'; ?> 
        <fieldset> 
            <h2>Ново обавештење</h2>
            <br />

            <div class="form-group">
                <label>Наслов</label>
                <input type="text" class="form-control" name="title" maxlength="45" required
                oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Морате попунити ово поље')"
                    >
            </div>
            <div class="form-group">
                <label>Текст</label>
                <textarea rows="6" cols="50" class="form-control" name="text" maxlength="300" required oninvalid="this.setCustomValidity('Морате попунити ово поље')"
                    oninput="this.setCustomValidity('')"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary" style="width:100%">Потврди</button>

    </fieldset>
</form>