<?php

    for ($i = 1; $i < 101; $i++){
        $genap = $i*2;
        echo '
        <label for="bil'.$i.'">Bilangan '.$i.'</label>
        <input type="number" value="'.$genap.'"><br>
        ';
    }
    

?>