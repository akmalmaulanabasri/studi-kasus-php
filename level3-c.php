<?php
if(isset($_POST['kirim'])){
    $bilangan1 = $_POST['bil1'];
    $bilangan2 = $_POST['bil2'];
    $bilangan3 = $_POST['bil3'];

    $samakaki = "segitiga sama kaki";
    $samasisi = "segitiga sama sisi";
    $segitiga_sembarang = "segitiga sembarang";

    if($bilangan1 == $bilangan2 && $bilangan2 == $bilangan3 && $bilangan1 == $bilangan3){
        echo $samasisi;
    }else if($bilangan1 == $bilangan2 || $bilangan2 == $bilangan3 || $bilangan1 == $bilangan3 || $bilangan1 == $bilangan2){
        echo $samakaki;
    }else{
        echo $segitiga_sembarang;
    }


}else{
    $bilangan1 = '';
    $bilangan2 = '';
    $bilangan3 = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 3-a</title>
</head>
<body>
    <h3>Tugas Level 3 : C</h3>
    <p>
    Susun algoritma (Flowchart) dan program dengan PHP <br>
        untuk menginput 3 buah bilangan yang masing2 menyatakan<br>
        panjang sisi sebuah segi tiga, kemudian perisa ketiga<br>
        buah garis tersebut ,<br>
        Bila ketiga buah garis tersebut sisinya sama maka cetak perkataan "SAMA SISI"<br>
        bila hanya kedua sisi yang sama maka cetak pernyataan "SAMA KAKI"<br>
        tapi bila ketiganya tidak sama maka cetak pernyataan "SEMBARANG"
    </p>
    <form action="level3-c.php" Method="POST">
        <label for="bil1">Bilangan 1</label>
        <input type="number" name="bil1" id="bil1" value="<?= $bilangan1?>">
        <br>
        <label for="bil2">Bilangan 2</label>
        <input type="number" name="bil2" id="bil2" value="<?= $bilangan2?>">
        <br>
        <label for="bil3">Bilangan 3</label>
        <input type="number" name="bil3" id="bil3" value="<?= $bilangan3?>">
        <br>
        <input type="submit" value="kirim" name="kirim">
    </form>
</body>
</html>