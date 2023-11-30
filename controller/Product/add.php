<?php

include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

if (isset($_POST["submit"])) {
    $id_category = $_POST['id_category'];
    $description = $_POST['Description'];
    $status = $_POST['status'];
    $id_team = $_POST['id_team'];
    $price = $_POST['price'];

    $sql = "INSERT INTO `product`(`id_category`, `Description`, `status`, `id_team`, `price`) VALUES (?,?,?,?,?)";

    $stmt = $connexion->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("issis", $id_category, $description, $status, $id_team, $price);
        if ($stmt->execute()) {
            echo "Insert done successfully!";
        } else {
            echo "Error Description: " . $stmt->error;
        }
    } else {
        echo "Error Description: " . $connexion->error;
    }
}
?>
