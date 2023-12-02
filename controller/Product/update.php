<?php

include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

if (isset($_POST["submit"])) {

    $id_pr = $_POST["id"];
    $nom = $_POST["nom"];
    $id_category = $_POST['id_category'];
    $description = $_POST['Description'];
    $status = $_POST['status'];
    $id_team = $_POST['id_team'];
    $price = $_POST['price'];

    
$sql = "UPDATE `product` SET `nom`=?, `Description`=?, `id_category`=?, `status`=?, `id_team`=?, `price`=? WHERE id = ?";
    $stmt = $connexion->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssisidi", $nom, $description, $id_category, $status, $id_team, $price, $id_pr);
        if ($stmt->execute()) {
            echo "Update done successfully!";
            header("location:show.php");
        } else {
            echo "Error Description: " . $stmt->error;
        }
    } else {
        echo "Error Description: " . $connexion->error;
    }
}


?>