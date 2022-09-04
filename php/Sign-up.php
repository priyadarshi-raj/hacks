<?php

$Name= $_POST['NAME']; //name of input field
$Email= $_POST['Email'];
$Password= $_POST['Password'];

//databse connection
$conn=new mysqli('localhost', 'root', '', 'healthcare');
if($conn->connect_error) {
die('connection failed :'. $conn->connect_error);
}
else{
    $stmt= $conn->prepare("insert into login (name, email, password) values(?,?,?)"); 
    $stmt->bind_param("sss", $Name, $Email, $Password);
    $stmt->execute();
    // echo"registered";
    $stmt->close();
    $conn->close();
    header("location:../index.php");
    }
?>