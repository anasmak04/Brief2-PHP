<?php
include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";
include "../../model/user.php";

$sql = GetUsers();
$result = $connexion->query($sql);


?>