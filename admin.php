<?php include("connect.php");
        echo "<style>
        .grid-container {
            display: inline-grid;
          }
          body
            {
            background-image:linear-gradient(to right,white,skyblue);
            }
        </style>";
        echo "<center><h1> Admin Panel</h1></center>";
        echo "<hr/>";
        echo "<h2>Names of users who are signed in</h2>";
        $sql = "SELECT Name FROM users_t";
        if ($res = mysqli_query($dbh, $sql))
        {

        if (mysqli_num_rows($res) > 0)
        {

        while ($row = mysqli_fetch_array($res))
        {

        echo "<div class=grid-container>".$row['Name']."<div/>";
        echo "<br>";

        }
        }
        }
        echo '<form name="Patient" action="login.html" method="get">';
        echo '<input type="submit" value="log Out">';
        echo '</form>';
        ?>