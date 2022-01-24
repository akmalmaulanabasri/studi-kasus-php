<?php
if(isset($_POST['problemC'])){
    $bilangan1 = $_POST['bil1'];
    $bilangan2 = $_POST['bil2'];
    $bilangan3 = $_POST['bil3'];
    $bilangan4 = $_POST['bil4'];

    //validasi bilangan bulat
if($_POST['bil1'] %= 2){
        $hasil = "Bilangan 1 Bukan Bilangan Bulat";
}else{
    if($_POST['bil2'] %= 2){
            $hasil = "Bilangan 2 Bukan Bilangan Bulat";
}else{

    if($_POST['bil3'] %= 2){
        $hasil = "Bilangan 3 Bukan Bilangan Bulat";
}else{
    if($_POST['bil4'] %= 2){
        $hasil = "Bilangan 4 Bukan Bilangan Bulat";
}else{

    $hasil = max($bilangan1, $bilangan2, $bilangan3, $bilangan4);
    $hasil = "Bilangan Terbesar Adalah $hasil";
}
}
}
}
}else{
    $bilangan1 = "";
    $bilangan2 = "";
    $bilangan3 = "";
    $bilangan4 = "";
    $hasil = "";
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
    <h3>Tugas Level 1 : c </h3>
        <p>
        Susun algoritma (flowchart) dan program dengan PHP untuk menginput 4 (empat) buah bilangan bulat,<br>
        (dianggap ketiga buah bilangan tersebut nilainya tidak sama satu dengan yang lain),<br>
         kemudian mencetak salah satu bilangan yang nilainya terbesar.
        </p>

        <form action="level1-c.php" method="POST">
            <label for="bil1">Bilangan 1</label>
            <input type="text" name="bil1" id="bil1" value="<?php echo $bilangan1?>">
            <br>
            <label for="bil2">Bilangan 2</label>
            <input type="text" name="bil2" id="bil2" value="<?php echo $bilangan2?>">
            <br>
            <label for="bil3">Bilangan 3</label>
            <input type="text" name="bil3" id="bil3" value="<?php echo $bilangan3?>">
            <br>
            <label for="bil4">Bilangan 4</label>
            <input type="text" name="bil4" id="bil4" value="<?php echo $bilangan4?>">
            <br>
            <input type="submit" value="kirim" name="problemC">
        </form>
        <h3><?php echo $hasil?></h3>
</body>
</html>