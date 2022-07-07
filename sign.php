<?php
$dbc = mysqli_connect('localhost', 'root', 'sharma@123','cibil') or die('Error connecting to server');
$a=$_POST["uname"];
$b=$_POST["psw"];
$c=$_POST["fname"];
$d=$_POST["lname"];
$e=$_POST["email"];
if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+.[a-zA-Z.]{2,5}$/", $e))
{
	header('Location: signup.html');
    exit;
}
else
{
	$query="INSERT INTO user VALUES('$a','$b','$c','$d','$e')";
    $result = mysqli_query($dbc, $query);
    header('Location:olms.html');
    exit;
}
mysqli_close();
?>