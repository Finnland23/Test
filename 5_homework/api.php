<?php
print_r($_POST);
print_r($_FILES);

$name=$_POST['user'];
$title=$_POST['title'];
$skill=$_POST['skill'];
$mail=$_POST['email'];
$phone=$_POST['phone'];
$layout=$_POST['layout'];
$photo=$_FILES['pic']['name'];
$phototmpname=$_FILES['pic']['tmp_name'];

copy($_FILES['pic']['tmp_name'],"upload/".$_FILES['pic']['name']);

session_start();

$_SESSION['user']=$name;
$_SESSION['title']=$title;
$_SESSION['skill']=$skill;
$_SESSION['mail']=$mail;
$_SESSION['phone']=$phone;
$_SESSION['layout']=$layout;
$_SESSION['pic']=$photo;
$_SESSION['tmpname']=$phototmpname;

header('location:preview.php');
?>