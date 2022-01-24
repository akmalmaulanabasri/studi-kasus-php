<?php

    for ($i = 1; $i < 101; $i++){
        echo '
        <label for="bil'.$i.'">Bilangan '.$i.'</label>
        <input type="text" name="bil'.$i.'" id="bil'.$i.'" value=""><br>
        ';
    }

?>