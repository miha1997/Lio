<div class="m-auto">
    <form style="margin-top:20px" class="d-flex justify-content-center" enctype="multipart/form-data" method="post" <?php echo 'action="' .base_url(). 'novoIzdanje/potvrdi">'; ?> 
        <fieldset> 
            <?php
                if(isset($ErrorMessage)){
                    echo '<div class="alert alert-dismissible alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>'. $ErrorMessage. '</strong>
                    </div>';
                    
                    $ErrorMessage = null;
                }
                
            ?>
            <h2>Попуните следећа поља</h2>
            <hr />
            <div class="form-group">
                <label for="exampleInputPassword1">Изглед</label>
                <br/>
                <input type="file" name="image" required oninvalid="this.setCustomValidity('Морате попунити ово поље')"
                    oninput="this.setCustomValidity('')">
            </div>
            <div class="form-group">
                <label>Наслов</label>
                <input type="text" class="form-control" name="title" maxlength="45" required
                oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Морате попунити ово поље')"
                    >
            </div>
            <div class="form-group">
                <label>Опис</label>
                <textarea rows="6" cols="50" class="form-control" name="description" maxlength="300" required oninvalid="this.setCustomValidity('Морате попунити ово поље')"
                    oninput="this.setCustomValidity('')"></textarea>
            </div>
            <div class="form-group">
                <label>Цена</label>
                <input type="number" class="form-control" name="price" min="1" required oninvalid="this.setCustomValidity('Морате попунити ово поље')"
                    oninput="this.setCustomValidity('')">
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%">Потврди</button>

        </fieldset>
    </form>
</div>