<?php

include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM `user` WHERE '$email' = ? AND '$password' = ? ";
    $stmt = $connexion->prepare($sql);

    $hashedPassword = password_hash($password , PASSWORD_DEFAULT);

    if ($stmt && $stmt->bind_param("ss", $email, $hashedPassword) && $stmt->execute()) {
        $_SESSION['email'] = $email;
        echo "login done successfully!";

        echo "Email stored in session: " . $_SESSION['email'];
    } else {
        echo "Error Description: " . $connexion->error;
    }
}
