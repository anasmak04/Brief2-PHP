<?php
include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $nom = $_POST["firstName"];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $id_role = $_POST['id_role'];

    $sql = "UPDATE `user` SET `firstName`=?, `lastName`=?, `email`=?, `id_role`=? WHERE id = ?";
    $stmt = $connexion->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssssi", $nom, $lastName, $email, $id_role, $id);
        if ($stmt->execute()) {
            echo "Update done successfully!";
            header("location:show.php");
            exit(); // Ensure to stop script execution after redirection
        } else {
            echo "Error Description: " . $stmt->error;
        }
    } else {
        echo "Error Description: " . $connexion->error;
    }
}


?>