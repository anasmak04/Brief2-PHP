<?php
include __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";
include "../../model/Product.php";

if (isset($_POST["submit"])) {
    $nom = $_POST["nom"];
    $description = $_POST['Description'];
    $status = $_POST['status'];
    $price = $_POST['price'];
    $id_category = $_POST["id_category"];
    $id_team = $_POST["id_team"];

    $sql = CreateProduct();

    $stmt = $connexion->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssisis", $nom, $description, $id_category, $status, $id_team, $price);

        if ($stmt->execute()) {
            echo "Insert done successfully!";
            header("location: show.php");
            exit();
        } else {
            echo "Error Description: " . $stmt->error;
        }
    } else {
        echo "Error Description: " . $connexion->error;
    }
}
?>
