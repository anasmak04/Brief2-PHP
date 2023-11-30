<?php
include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

if (isset($_GET['search'])) {
    $nom = $_GET['nom'];


    $sql = "SELECT * FROM `product` WHERE nom LIKE '%$nom%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row['id'] . " | Name: " . $row['name'] . "<br>";
        }
    } else {
        echo "No results found.";
    }
 
}


?>