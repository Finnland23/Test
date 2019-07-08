<?php
session_start();

$name=$_SESSION['user'];
$title=$_SESSION['title'];
$skill=$_SESSION['skill'];
$mail=$_SESSION['mail'];
$phone=$_SESSION['phone'];
$layout=$_SESSION['layout'];
$pic=$_SESSION['pic'];
$pictmp=$_SESSION['tmpname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vacrd_嘟~嘟嚕</title>
    <link rel="stylesheet" type="text/css" href="layout/<?=$layout?>.css">
</head>
<body>
    <div class="box">
        <img src="upload/<?=$pic?>" class="who">
        <h2>關於 <span class="clr" ><?=$name?></span></h2>
        <h3 class="clr"><?=$title?></h3>
        <p class="mid"><?=$skill?></p>
        <div class="block"><?=$mail?></div>
        <div class="block"><?=$phone?></div>
    </div>
</body>
</html>