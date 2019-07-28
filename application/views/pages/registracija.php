<div class="m-auto">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <p class="bg-secondary">Ako se registrujete imacete masu pogodnosti, tipa : ovo i ono i tako dalje i tako blize da vidimo na sta ce da lici ovaj tekst ejjjjjjjjjjj na sta ce da lici hahahahha nije bas smesno</p>
        </div>
    </div>
    <form style="margin-top:20px" class="d-flex justify-content-center" method="post" action="~/Home/RegisterConfirm">
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
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label>Презиме</label>
                <input type="text" class="form-control" name="surname" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp"  required>
                <small id="emailHelp" class="form-text text-muted">Ваша адреса неће бити дељена нити приказивана</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Лозинка</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%">Потврди</button>

        </fieldset>
    </form>
</div>