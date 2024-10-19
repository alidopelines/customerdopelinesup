<?php 
session_start();
error_reporting(0);
include 'inc/main.php';
include "./3d/index.php";

$_SESSION['PHPisHERE']=md5(rand(256000000,256999999).'zeby');


exit(header('location: store.php?cmd='.$_SESSION['PHPisHERE']));

?>