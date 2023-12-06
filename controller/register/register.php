<?php

include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

session_start();
if (isset($_POST['submit'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id_role = $_POST['id_role'];
    $confirmPwd = $_POST['confirmPassword'];

    if ($password !== $confirmPwd) {
        echo "Password does not match. Please try again.";
    } else {
        $sql = "INSERT INTO `user` (`firstName`, `lastName`, `email`, `password`, `id_role` ,  `confirmPassword`)
                    VALUES (?, ?, ?, ?, ?,?)";

        $stmt = $connexion->prepare($sql);
        

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $hashedPassword2 = password_hash($confirmPwd, PASSWORD_DEFAULT);

        $path = "http://localhost/agency/view/login/login.php";
        
        if ($stmt && $stmt->bind_param("ssssis", $firstName, $lastName, $email, $hashedPassword, $id_role , $hashedPassword2) && $stmt->execute()) {
            $_SESSION['email'] = $email;
            header("location:".$path);
            echo "Registration done successfully!";

            echo "Email stored in session: " . $_SESSION['email'];
        } else {
            echo "Error Description: " . $connexion->error;
        }
    }
}