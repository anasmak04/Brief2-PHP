<?php
include __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";
include "../../model/Blog.php";

if (isset($_GET['id'])) {
    $blog_id = $_GET['id'];
    
    $sql = DeleteBlog();
    
    $stmt = $connexion->prepare($sql);

    $stmt->bind_param("i", $blog_id);


    $stmt->execute();


    $stmt->close();
} else {
    echo "No product ID provided for deletion.";
}
?>
