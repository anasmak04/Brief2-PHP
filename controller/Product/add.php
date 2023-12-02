<?php
include __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";
include "../../model/Product.php";

if (isset($_POST["submit"])) {
    $nom = $_POST["nom"];
    $description = $_POST['Description'];
    $status = $_POST['status'];
    $price = $_POST['price'];
    $team = $_POST['teamNom'];
    $category = $_POST['categoryNom'];

    $sql1 = CreateCategory();
    $sql2 = CreateTeam();

    $stmt1 = $connexion->prepare($sql1);
    $stmt2 = $connexion->prepare($sql2);

    if ($stmt1 && $stmt2) {
        $stmt1->bind_param("s", $category);
        $stmt2->bind_param("s", $team);

        if ($stmt1->execute() && $stmt2->execute()) {
            $id_category = $connexion->insert_id;
            $id_team = $connexion->insert_id;

            $sql = CreateProduct();
            $stmt = $connexion->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("sssiii", $nom, $description, $id_category, $status, $id_team, $price);

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
        } else {
            echo "Error executing category or team insertion";
        }
    } else {
        echo "Error preparing statements";
    }
}

?>
