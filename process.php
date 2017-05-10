<?php
    $username = $_POST['user'];
    $password = $_POST['pass'];

    mysql_connect("localhost","admin","pass"); // server, username and password
    mysql_select_db("portfolio");

    $result = mysql_query("select * from users where username = '$username' and password = '$password'") or die("Failed to query database *".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password) {
        echo "Login success! Welcome ".$row['username'];
    } else {
        echo "Failed to login!";
    }

?>