<?php
include __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $status = $_POST['status'];
    $description = $_POST['description'];
    $id_user = $_POST['id_user'];
    $price = $_POST['price'];

    $sql = "UPDATE `blog` SET `nom`=?, `status`=?, `description`=?, `id_user`=?, `Price`=? WHERE id = ?";
    $stmt = $connexion->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssidi", $nom, $status, $description, $id_user, $price, $id);
        if ($stmt->execute()) {
            echo "Update done successfully!";
            header("location: show.php"); // Redirect after successful update
            exit(); // Ensure script stops execution after redirection
        } else {
            echo "Error Description: " . $stmt->error;
        }
    } else {
        echo "Error Description: " . $connexion->error;
    }
}
?>
