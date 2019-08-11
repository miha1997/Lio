<?php
    
    echo '
    <div class="izdanje-preview">
    	<img src="data:image;base64,'. $izdanje->Slika .'"/>              
        <p><font size="4">' . $izdanje->Naslov . '</font></p>
        <hr>
        <p>' . $izdanje->Opis . '</p>
        <div class="izdanje-preview-meta">
        </div>
               
        <a href="' . base_url() . 'prikazIzdanja?id=' . $izdanje->Id . '">
            <div class="izdanje-preview-goto">
                <img src="'. base_url() . 'assets/images/arrow.png">
            </div>
        </a>

    </div>';
?>