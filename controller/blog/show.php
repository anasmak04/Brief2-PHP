<?php
include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";
include "../../services/Blog.php";

$result = GetAllBlogs($connexion);


?>