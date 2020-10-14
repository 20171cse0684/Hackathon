<?php
include("connect.php");
If ($dbh==false) echo "connection error".mysqli_connect_error($con);
If($_SERVER["REQUEST_METHOD"]==="POST")
{
$uid=$_POST["name"];
$pwd=$_POST["PWD"];
$ins = "INSERT INTO users(Name,Password) VALUES ('$uid','$pwd')";
$result = mysqli_query($dbh,$ins) or
die("Error querying the database");

echo "operation success, pls refresh your database";
echo '<form name="Patient" action="login.html" method="get">';
echo '<input type="submit" value="Click here to log in">';
echo '</form>';
}
?>
