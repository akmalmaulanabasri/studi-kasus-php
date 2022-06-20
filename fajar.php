<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3A</title>
</head>
<body>
    <h3> Masukkan Bilangan <br> (untuk mengurutkan dari bilangan terkecil ke terbesar) </h3>
    <form method="POST" action="fajar.php">
      <input type="number" name="satu">
      <input type="number" name="dua">
      <input type="number" name="tiga">
      <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        $satu = $_POST["satu"];
        $dua = $_POST["dua"];
        $tiga = $_POST["tiga"];
        $nilai = array($satu,$dua,$tiga);

        sort($nilai);
        echo "<br>";

        $jumlah = count($nilai);
        for($x = 0; $x < $jumlah; $x++){
            echo ($nilai)[$x];
            echo "<br>";
        }
    }
?>