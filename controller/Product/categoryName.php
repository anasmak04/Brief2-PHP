<?php


include __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

$sql = "SELECT product.nom AS product_name, product.Description AS product_description ,
product.price AS product_price, category.nom AS category_name 
FROM product 
INNER JOIN category ON product.id = category.id";


$result = $connexion->query($sql);



?>