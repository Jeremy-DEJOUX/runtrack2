<?php
session_start();
// $bdd = mysqli_connect('localhost','root','','livreor'); 
$_SESSION = array();
session_destroy();
header('Location: connexion.php');
?>