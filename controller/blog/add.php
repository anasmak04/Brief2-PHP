

<?php

include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";
include "../../model/Create.php";


if (isset($_POST["submit"])) {
    $nom = $_POST["nom"];
    $status = $_POST['status'];
    $description = $_POST['description'];
    $id_user = $_POST['id_user'];
    $price = $_POST['price'];

    $sql = CreateBlog();
    $stmt = $connexion->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssis", $nom, $status, $description, $id_user, $price);
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
