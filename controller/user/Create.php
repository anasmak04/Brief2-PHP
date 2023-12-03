<?php

include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";
include "../../model/user.php";
session_start();
if (isset($_POST['submit'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $id_role = $_POST['id_role'];
    $password = $_POST['password'];

        $sql = CreateUser();

        $stmt = $connexion->prepare($sql);


      

        
        if ($stmt && $stmt->bind_param("sssis", $firstName, $lastName, $email, $id_role, $password) && $stmt->execute()) {
            $_SESSION['email'] = $email;
            echo "Registration done successfully!";
            header("location:show.php");
            echo "Email stored in session: " . $_SESSION['email'];
        } else {
            echo "Error Description: " . $connexion->error;
        }
    
}
