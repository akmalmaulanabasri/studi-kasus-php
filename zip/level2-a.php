<?php

if(isset($_POST['kirim'])){
        for ($i = 1; $i < 101; $i++){
            $bilangan[$i] = $_POST['bil' . $i];
            $data[$i] = $_POST['bil' . $i];
            $hasil = max($data);
            // break;
            unset($data);
        }
    die("Bilangan $hasil Adalah Yang Terbesar");
    // var_dump($data);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="level2-a.php" method="POST">
    <?php 
    for ($i = 1; $i < 101; $i++){
        $genap = $i*2;
        echo '
        <label for="bil'.$i.'">Bilangan '.$i.'</label>
        <input type="number" name="bil'.$i.'" value="'.rand(11,22).'"><br>
        ';
    }
    ?>
        <input type="submit" name="kirim" value="Kirim">
    </form>
</body>
</html>