
<?php
session_start();

$_SESSION['UserNameError'] = "";
$_SESSION['UserName'] = "";
$_SESSION['UserId'] = -1;
header('Location:  /plethora/html/home.php');

?>

