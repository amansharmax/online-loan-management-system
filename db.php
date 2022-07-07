<?php
$dbc = mysqli_connect('localhost', 'root', 'sharma@123','employee') or die('Error connecting to server');
$q="DELETE FROM department where Dno=60";
$result = mysqli_query($dbc, $q)
or die('Error querying database.');
?>