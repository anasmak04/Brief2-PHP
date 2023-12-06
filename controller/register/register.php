<?php

include __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

session_start();

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //$id_role = $_POST['id_role'];
    $confirmPwd = $_POST['confirmPassword'];
    $role = 2;

    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPwd)) {
        echo "Please fill in all fields.";
    } elseif ($password !== $confirmPwd) {
        echo "Passwords do not match. Please try again.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


        $sql = "INSERT INTO `user` (`firstName`, `lastName`, `email`, `id_role`, `password`)
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $connexion->prepare($sql);

        if ($stmt) {

            $stmt->bind_param("sssis", $firstName, $lastName, $email, $role, $hashedPassword);
            if ($stmt->execute()) {
                $_SESSION['email'] = $email;
                $path = "http://localhost/agency/view/login/login.php";
                header("location:" . $path);
                exit();
            } else {
                echo "Error: Registration failed.";
            }
        } else {
            echo "Error preparing statement.";
        }
    }
}
