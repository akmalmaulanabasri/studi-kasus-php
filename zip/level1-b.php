<?php
if(isset($_POST['problemB'])){
    $bilangan1 = $_POST['bil1'];
    $bilangan2 = $_POST['bil2'];
    $bilangan3 = $_POST['bil3'];

    //validasi bilangan bulat
    if($_POST['bil3'] %= 2){
        $hasil = "Bilangan 3 Bukan Bilangan Bulat";
}else{

    $hasil = max($bilangan1, $bilangan2, $bilangan3);
    $hasil = "Bilangan Terbesar Adalah $hasil";
}

}else{
    $bilangan1 = "";
    $bilangan2 = "";
    $bilangan3 = "";
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
    <h3>Tugas Level 1 : b </h3>
        <p>
        Susun algoritma (flowchart) dan program dengan PHP untuk menginput 3 (tiga) buah bilangan bulat,<br>
        (dianggap ketiga buah bilangan tersebut nilainya tidak sama satu dengan yang lain),<br>
        kemudian mencetak salah satu bilangan yang nilainya terbesar
        </p>

        <form action="level1-b.php" method="POST">
            <label for="bil1">Bilangan 1</label>
            <input type="text" name="bil1" id="bil1" value="<?php echo $bilangan1?>">
            <br>
            <label for="bil2">Bilangan 2</label>
            <input type="text" name="bil2" id="bil2" value="<?php echo $bilangan2?>">
            <br>
            <label for="bil3">Bilangan 3</label>
            <input type="text" name="bil3" id="bil3" value="<?php echo $bilangan3?>">
            <br>
            <input type="submit" value="kirim" name="problemB">
        </form>
        <h3><?php echo $hasil?></h3>
</body>
</html>