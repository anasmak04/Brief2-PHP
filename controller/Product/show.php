<?php
include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

$sql = "SELECT * FROM `product`";
$result = $connexion->query($sql);


?>