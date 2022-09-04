<?php

$Name= $_POST['NAME']; //name of input field
$Gender= $_POST['Gender'];
$Age= $_POST['Age'];
$Height= $_POST['Height'];
$Weight= $_POST['Weight'];
$Email= $_POST['Email'];

//databse connection
$conn=new mysqli('localhost', 'root', '', 'healthcare');
if($conn->connect_error) {
die('connection failed :'. $conn->connect_error);
}
else{
    $stmt= $conn->prepare("insert into bmi (Name, Gender, Age, Height, Weight, Email) values(?,?,?,?,?,?)"); 
    $stmt->bind_param("ssssss", $Name, $Gender, $Age, $Height, $Weight, $Email);
    $stmt->execute();
    // echo"registered";
    $stmt->close();
    $conn->close();
    // header("location:../index.html");
    }
?>