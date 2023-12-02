<?php

include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

session_start();
if (isset($_POST['submit'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $id_role = $_POST['id_role'];
    $password = $_POST['password'];

    if ($password !== $confirmPwd) {
        echo "Password does not match. Please try again.";
    } else {
        $sql = "INSERT INTO `user` (`firstName`, `lastName`, `email`, `id_role`, `password`)
                    VALUES (?, ?, ?, ?, ?)";

        $stmt = $connexion->prepare($sql);


        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
      

        
        if ($stmt && $stmt->bind_param("sssis", $firstName, $lastName, $email, $id_role, $hashedPassword) && $stmt->execute()) {
            $_SESSION['email'] = $email;
            echo "Registration done successfully!";

            echo "Email stored in session: " . $_SESSION['email'];
        } else {
            echo "Error Description: " . $connexion->error;
        }
    }
}
