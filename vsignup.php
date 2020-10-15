<?php
include("connect.php");
If ($dbh==false) echo "connection error".mysqli_connect_error($con);
If($_SERVER["REQUEST_METHOD"]==="POST")
{
    <console class="log">$_POST</console>
$uid=$_POST["ID"];
$name=$_POST["name"];
$pwd=$_POST["PWD"];
$ins = "INSERT INTO users_t(Id,Name,Password) VALUES ('$uid','$name','$pwd')";
$result = mysqli_query($dbh,$ins) or
die("ID already exists please try with different ID");

echo $_POST;
echo "operation success, pls refresh your database";
echo '<form name="Patient" action="login.html" method="get">';
echo '<input type="submit" value="Click here to log in">';
echo '</form>';
}
?>
