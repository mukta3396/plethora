
<?php
session_start();
$con = mysqli_connect("localhost","root","mukta3396","plethora");
// Check connection
if (mysqli_connect_errno())
{
echo "<script> window.history.go(-1); </script>";
}
$_SESSION['UserNameError'] = "";
$_SESSION['UserName'] = "";
$_SESSION['UserId'] = -1;
$check="SELECT * FROM Login WHERE uname='$_POST[uname]'";
$result4=mysqli_query($con,$check);
		 $rowcount=mysqli_num_rows($result4);
		 if($rowcount >0)
		 {
  		 $_SESSION['UserNameError'] = "Username already taken!";
		 header('Location:  /plethora/html/login.php');
		 }
else{
$sql1="SELECT customer_id FROM Customer ORDER BY customer_id DESC LIMIT 1";
$result=mysqli_query($con,$sql1);
$row=mysqli_fetch_array($result,MYSQL_NUM);
$id=$row[0]+1;
$sql2 = "INSERT INTO Customer (f_name, l_name, contact_no,email)
VALUES
('$_POST[f_name]' , '$_POST[l_name]','$_POST[phone]','$_POST[email]')";
if (!mysqli_query($con,$sql2))
{
echo "<script> window.history.go(-1); </script>";
}
if($_POST['type']=="Buyer")
{
$t="b";
}
else
$t="s";
$sql3 = "INSERT INTO Login (login_id, password, uname,bors)
VALUES
('$id' , '$_POST[password]','$_POST[uname]','$t')";
if (!mysqli_query($con,$sql3))
{
header('Location:  /plethora/html/home.php');
}
$_SESSION['UserID'] = $id;
$_SESSION['UserName'] = $_POST[uname];
mysqli_close($con);
header('Location:  /plethora/html/login.php');
}
?>

