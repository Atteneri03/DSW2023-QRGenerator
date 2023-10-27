<?php
require "../vendor/autoload.php";

use Atteneri\QrGenerator\QRBuilder;

$qr1 = QRBuilder::create($_POST["data"], $_POST["label"], $_POST["filename"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Generador de código QR para <?= $_POST["filename"];?></h2>
    <img src="img/<?= $_POST["filename"];?>.png" alt="<?=$_POST["data"];?>">
</body>
</html>