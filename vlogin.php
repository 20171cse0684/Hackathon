<?php
SESSION_START();
include("connect.php");
If ($dbh==false) echo "connection
error".mysqli_connect_error($con);
If($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=$_POST['Name'];
$pass=$_POST['PWD'];
$_SESSION['user']=$username;
$sql = "SELECT * FROM users_t where Name='$username'";

if($username=='admin' && $pass=='admin')
    {
        header('location:admin.php');
    }

if ($res = mysqli_query($dbh, $sql))
{

if (mysqli_num_rows($res) > 0)
{

while ($row = mysqli_fetch_array($res))
{

if($row['Password']!=$pass)
{

echo"password is not matching";
echo '<form name="Patient" action="login.html" method="get">';
echo '<input type="submit" value="Try again">';
echo '</form>';
break;

}
else{
header('location:list.html');
}

}
}else {echo"wrong user name";
    echo '<form name="Patient" action="sign_up.html" method="get">';
    echo '<input type="submit" value="Please Sign up here">';
    echo '</form>';
}
} else echo"Error please go back";
       
mysqli_free_result($res);
}
?>