<?php
if(isset($_POST['kirim'])){
    $bilangan1 = $_POST['bil1'];
    $bilangan2 = $_POST['bil2'];
    $bilangan3 = $_POST['bil3'];
    $data = array($bilangan1, $bilangan2, $bilangan3);
    //mencari bilangan tengah
    $sort = sort($data);

    for ($i = 0; $i < count($data); $i++){
        // echo $data[$i] . '<br>';
    }
    echo 'Bilangan Tengah Adalah ' . $data[1];

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
    <form action="level3-b.php" Method="POST">
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