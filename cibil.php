<?php

//include('db.php');
$dbc = mysqli_connect('localhost', 'root', 'sharma@123','cibil') or die('Error connecting to server');
    $username = $_POST['uname'];
    $userpassword = $_POST['psw'];
  //  $username = mysqli_real_escape_string($_POST['username']);
  //  $userpassword = mysqli_real_escape_string($_POST['password']);
    $query = "SELECT uname,password FROM user WHERE uname= '$username' AND password = '$userpassword'";
 //   echo "$username";
  //  echo"$userpassword";
 //   echo $query;
    $result = mysqli_query($dbc,$query);
    //echo $result;
    
  $c=mysqli_num_rows($result);
  if($c==1)
{
echo"login successful";
}
else
{
echo("Please Enter Correct Username and Password ...");

}

?>
