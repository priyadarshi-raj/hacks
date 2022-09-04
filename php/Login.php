<?php

if (isset($_GET['Login'])) {
    
    $Email1 = $_GET["Email1"];
    $Password = $_GET["Password1"];
    $conn = mysqli_connect("localhost", "root", "", "healthcare");
    if ($conn->connect_error) {
        die('connection failed :' . $conn->connect_error);
    } else {

        // $sql = "Select * from users where username='$username' AND password='$password'";
        $sql = "Select * from login where email='$Email1' AND password='$Password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $login = true;
            session_start();
            // $_SESSION['loggedin'] = true;
            $_SESSION['user_name'] = $Email1;
            header("location:../landing.php");
        } else {
            echo "<font color='red'>Login Failed</font>";
        }
        $conn->close();
    }
}

?>