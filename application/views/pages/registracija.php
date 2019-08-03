<div class="row">
    <div class="col-sm-12">
        <h4 style="background-color:whitesmoke" class="p-2">Ako se registrujete imacete masu pogodnosti, tipa : ovo i ono i tako dalje i tako blize da vidimo na sta ce da lici ovaj tekst ejjjjjjjjjjj na sta ce da lici hahahahha nije bas smesno; Ako se registrujete imacete masu pogodnosti, tipa : ovo i ono i tako dalje i tako blize da vidimo na sta ce da lici ovaj tekst ejjjjjjjjjjj na sta ce da lici hahahahha nije bas smesno; Ako se registrujete imacete masu pogodnosti, tipa : ovo i ono i tako dalje i tako blize da vidimo na sta ce da lici ovaj tekst ejjjjjjjjjjj na sta ce da lici hahahahha nije bas smesno</h4>
    </div>
</div>
<div class="m-auto">
    <form style="margin-top:20px" class="d-flex justify-content-center" method="post" <?php echo 'action="' .base_url(). 'registracija/potvrdi">'; ?> 
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
            <h2>Форма за регистрацију</h2>
            <br />

            <div class="form-group">
                <label>Име</label>
                <input type="text" class="form-control" name="name" maxlength="20" required
                oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Морате попунити ово поље')"
                    >
            </div>
            <div class="form-group">
                <label>Презиме</label>
                <input type="text" class="form-control" name="surname" maxlength="25" required oninvalid="this.setCustomValidity('Морате попунити ово поље')"
                    oninput="this.setCustomValidity('')">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" maxlength="35" aria-describedby="emailHelp" required oninvalid="this.setCustomValidity('Морате попунити ово поље')"
                    oninput="this.setCustomValidity('')">
                <small id="emailHelp" class="form-text text-muted">Ваша адреса неће бити дељена нити приказивана</small>
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