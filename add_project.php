<?php
include "db.php";

$client_name = $_POST['client_name'];
$project_type = $_POST['project_type'];
$budget = $_POST['budget'];
$status = $_POST['status'];

$conn->query("INSERT INTO projects(client_name, project_type, budget, status)
VALUES('$client_name','$project_type','$budget','$status')");
?>