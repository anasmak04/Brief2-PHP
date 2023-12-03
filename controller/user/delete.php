<?php


include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";
include "../../model/user.php";


if (isset($_GET['id'])) {
    $id_user =  $_GET['id'];
    $sql = DeleteUser();

    $stmt = $connexion->prepare($sql);

    $stmt->bind_param("i", $id_user);


    $stmt->execute();


    $stmt->close();
    
} else {
    echo "No product ID provided for deletion.";
}