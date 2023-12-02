<?php
include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";
include "../../model/user.php";

$sql = "SELECT * FROM `user` ";
$result = $connexion->query($sql);


?>