<?php
include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

$sql = "SELECT * FROM `product`";
$result = $connexion->query($sql);


$sql1 = "SELECT DISTINCT nom FROM `category`";
$result1 = $connexion->query($sql1);


$sql2 = "SELECT DISTINCT nom FROM `team`";
$result2 = $connexion->query($sql2);

$categories = array();
$teams = array();

if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
        $categories[] = $row['nom'];
    }
}

if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
        $teams[] = $row['nom'];
    }
}



?>