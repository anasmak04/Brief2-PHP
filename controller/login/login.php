<?php

include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the entered password to match with the hashed password in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT u.id, u.id_role, u.password, r.nom as role_name FROM `user` u
            INNER JOIN `role` r ON u.id_role = r.id
            WHERE u.email = ?";

    $stmt = $connexion->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();

            if (password_verify($password, $row['password'])) {
                $_SESSION['email'] = $email;
                $_SESSION['role'] = $row['role_name'];

                $path = "../../index.php";
                $path2 = "../Product/show.php";

                if ($_SESSION['role'] === 'admin') {
                    header("Location: " . $path);
                    exit();
                } else {
                    header("Location: " . $path2);
                    exit();
                }
            } else {
                echo "Invalid email or password.";
            }
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "Error: " . $connexion->error;
    }
}
?>
