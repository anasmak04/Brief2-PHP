<?php


include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";
include "../../model/user.php";


if (isset($_GET['id'])) {
    $id_user =  $_GET['id'];
    $sql = "DELETE FROM `user` WHERE id = ?";

    $stmt = $connexion->prepare($sql);

    $stmt->bind_param("i", $id_user);


    $stmt->execute();


    $stmt->close();
    
} else {
    echo "No product ID provided for deletion.";
}