<?php
$conn = new mysqli("localhost","root","","interiordb");

if($conn->connect_error){
    die("Connection failed");
}
?>