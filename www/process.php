<?php
session_start();

$username = htmlspecialchars($_POST['userName'] ?? ''); 
$email = htmlspecialchars($_POST['userEmail'] ?? ''); 

$_SESSION['username'] = $username;
$_SESSION['email'] = $email;

header("Location: index.php");
exit();
?>
