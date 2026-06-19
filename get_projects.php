<?php
include "db.php";

$result = $conn->query("SELECT * FROM projects");

while($row = $result->fetch_assoc()){
    echo "
    <div class='card'>
        <h3>".$row['client_name']."</h3>
        <p>Project: ".$row['project_type']."</p>
        <p>Budget: €".$row['budget']."</p>
        <p>Status: ".$row['status']."</p>
    </div>";
}
?>