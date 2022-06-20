<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="penjumlahan.php" method="POST">
        <label for="bilangan1">Bilangan 1</label>
        <input type="text" name="bil1" id="bilangan1">
        <br>
        <label for="bilangan2">Bilangan 2</label>
        <input type="text" name="bil2" id="bilangan2">
        <br>
        <label for="operasi">Operasi</label>
        <br>
        <input type="radio" name="operasi" id="ganjil" value="penjumlahan">Tambah
        <input type="radio" name="operasi" id="ganjil" value="pengurangan">Kurang
        <br>
        <input type="submit" value="Hitung" name="hitung">
    </form>
</body>
</html>

<?php
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];

        if($_POST['operasi'] == 'penjumlahan'){
            $hasil = $bil1 + $bil2;
        }else{
            $hasil = $bil1 - $bil2;
        }

        echo "Hasil $operasi dari $bil1 dan $bil2 adalah $hasil";
    }
?>