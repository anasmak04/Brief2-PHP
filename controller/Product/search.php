<?php
include __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

if (isset($_GET['search'])) {
    
    $nom = $_GET['nom'];
    
    $sql = "SELECT * FROM `product` WHERE nom LIKE '%$nom%'";

    $result = $connexion->query($sql);
}




?>
