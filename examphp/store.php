<?php
$name = $_POST["name"];
$age = $_POST["age"];
$address = $_POST["address"];
$telephone = $_POST["telephone"];

$host = "127.0.0.1";
$dbname = "php";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($host,$dbuser,$dbpass,$dbname);
if($conn->connect_error){
    die("Connection refused!");
}

$sql = "insert into students(name,age,address,telephone) values('$name','$age','$address','$telephone')";
$conn->query($sql);

header("Location: students.php");