<?php

include __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT u.id, u.id_role, r.nom as role_name FROM `user` u
            INNER JOIN `role` r ON u.id_role = r.id
            WHERE u.email = ? AND u.password = ?";

    $stmt = $connexion->prepare($sql);


    $path = "../../index.php";
    $path2 = "../Product/show.php";
    if ($stmt && $stmt->bind_param("ss", $email, $password) && $stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();

            $_SESSION['email'] = $email;
            $_SESSION['role'] = $row['role_name'];

            if ($_SESSION['role'] === 'admin') {
                header("Location:".$path);
                exit();
            } else {
                header("Location:".$path2);
                exit();
            }
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "Error Description: " . $connexion->error;
    }
}
