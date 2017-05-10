<?php
    session_start();

    //connect to mysql
    $db = mysqli_connect("127.9.222.130", "adminemwMNqG", "j9mIkbpkj-se", "portfolio");

    if (isset($_POST['register_btn'])) {
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        // create user
        $sql = "INSERT INTO users(username, password) VALUES('$username', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['message'] = "You are logged in now";
        $_SESSION['username'] = $username;
        header("location: http://google.ca"); //redirect to home page
    }

?>


<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
</head>
<body>
<div class="header">
    <h1>Register here!</h1>
</div>

<form>
    <table>
        <tr>
            <td>UserName:</td>
            <td><input type="text" name="username" class="textInput"></td>
        </tr>
        <tr>
            <td>PassWord:</td>
            <td><input type="password" name="password" class="textInput"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="register_btn" value="Register!"></td>
        </tr>
    </table>
</form>

</body>
</html>