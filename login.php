<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body id="bodyy">
    <center>
    <form action="#" method="POST" autocomplete="off">
       <h1>WELCOME FOR LOGIN</h1>
        <table>
            <tr>
                <td><b>Email</b></td>
                <td><input type="email" id="email" name="email"></td>
            </tr>
            <tr>
                <td><b>Password</b></td>
                <td><input type="password" id="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="login" id="login" value="Login"></td>
            </tr>
        </table>
        <p>not register? <a href="register.html">Register</a></p>
    </form>
</center>
</body>
</html>

<?php
$conn = new mysqli("localhost", "root", "", "bloodbank");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM mbstublood WHERE email='$email' AND password='$password'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($total==1){
        header('location:blood group name page.php');
    }
    else {

    }
}
?>
