<?php

        // program penyelesaian studikasus A
    if(isset($_POST['ProblemA'])){
        $bilangan1 = $_POST['bil1'];
        $bilangan2 = $_POST['bil2'];

    if($bilangan1 >= $bilangan2){
        $hasil1 = "Bilangan $bilangan1 Lebih Besar dari $bilangan2";
}elseif($bilangan1 <= $bilangan2){
        $hasil1 = "Bilangan $bilangan2 Lebih Besar dari $bilangan1";
        }
    }else{
        $bilangan1 = "";
        $bilangan2 = "";
        $hasil1 = "";
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
        <title>
            Level 1 Studi Kasus
        </title>
    </head>
    <body>
        <h3>Tugas Level 1 : a [SOLVED]</h3>
        <p>
        Susun algoritma (flowchart) dan program dengan PHP untuk menginput 2 (dua) buah bilangan bulat
        <br>
        kemudian mencetak salah satu bilangan yang nilainya terbesar.
        </p>
        <form action="level1-a.php" method="POST">
            <label for="bil1">Bilangan 1</label>
            <input type="text" name="bil1" id="bil1" value="<?php echo $bilangan1;?>">
            <br>
            <label for="bil2">Bilangan 2</label>
            <input type="text" name="bil2" id="bil2" value="<?php echo $bilangan2;?>">
            <br>
            <input type="submit" value="kirim" name="ProblemA">
        </form>
        <h2><?php echo $hasil1?></h2>

        <!-- <hr>
        <h4>code :</h4>
        <script src="https://emgithub.com/embed.js?target=https%3A%2F%2Fgithub.com%2Fakmalmaulanabasri%2Fstudi-kasus-php%2Fblob%2Fmaster%2Flevel1-a.php&style=github&showBorder=on&showLineNumbers=on&showFileMeta=on&showCopy=on&fetchFromJsDelivr=on"></script> -->

</body>
</html>