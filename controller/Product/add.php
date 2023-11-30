<?php

include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

if (isset($_POST["submit"])) {
    $nom = $_POST["nom"];
    $id_category = $_POST['id_category'];
    $description = $_POST['Description'];
    $status = $_POST['status'];
    $id_team = $_POST['id_team'];
    $price = $_POST['price'];

    $sql = "INSERT INTO `product`(`nom`,`id_category`, `Description`, `status`, `id_team`, `price`) VALUES (?,?,?,?,?,?)";

    $stmt = $connexion->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sissis", $nom, $id_category, $description, $status, $id_team, $price);
        if ($stmt->execute()) {
            echo "Insert done successfully!";
            header("location:show.php");
        } else {
            echo "Error Description: " . $stmt->error;
        }
    } else {
        echo "Error Description: " . $connexion->error;
    }
}
?>
