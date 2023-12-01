<?php
include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";
include "../../model/Blog.php";

$sql = GetAllBlogs();
$result = $connexion->query($sql);


?>