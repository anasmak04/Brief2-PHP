<?php


include __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

$sql = "SELECT product.nom AS product_name, category.nom AS category_name 
FROM product 
INNER JOIN category ON product.id = category.id";
$result = $connexion->query($sql);



?>