<?php
include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";
include "../../model/user.php";

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $nom = $_POST["firstName"];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $id_role = $_POST['id_role'];

    $sql = UpdateBlog();
    $stmt = $connexion->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssii", $nom, $lastName, $email, $id_role, $id);
        if ($stmt->execute()) {
            echo "Update done successfully!";
            header("location:show.php");
            exit(); 
        } else {
            echo "Error Description: " . $stmt->error;
        }
    } else {
        echo "Error Description: " . $connexion->error;
    }
}


?>