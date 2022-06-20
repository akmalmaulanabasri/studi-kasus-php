<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="cari-ganjil-genap.php" method="POST">
        <label for="bilangan1">Bilangan 1</label>
        <input type="text" name="bil1" id="bilangan1">
        <br>
        <label for="bilangan2">Bilangan 2</label>
        <input type="text" name="bil2" id="bilangan2">
        <br>
        <label for="operasi">Operasi</label>
        <br>
        <input type="radio" name="operasi" id="ganjil" value="ganjil">Ganjil
        <input type="radio" name="operasi" id="ganjil" value="genap">Genap
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

        echo "Mencetak bilangan $operasi dari $bil1 dan $bil2 <br>";

        if($_POST['operasi'] == 'ganjil'){
            for($i = $bil1; $i <= $bil2; $i++){
                if($i % 2 != 0){
                    echo $i . '<br>';
                }
            }
        }else{
            for($i = $bil1; $i <= $bil2; $i++){
                if($i % 2 == 0){
                    echo $i . '<br>';
                }
            }
        }
    }
?>