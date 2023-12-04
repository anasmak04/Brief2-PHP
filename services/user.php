<?php




function UpdateUser($connexion)
{

    if (isset($_POST["submit"])) {
        $id = $_POST["id"];
        $nom = $_POST["firstName"];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $id_role = $_POST['id_role'];

        $sql = "UPDATE `user` SET `firstName`=?, `lastName`=?, `email`=?, `id_role`=? WHERE id = ?";
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
}

function GetUsers($connexion)
{

    $sql = "SELECT * FROM `user` ";
    $result = $connexion->query($sql);
}


function DeleteUser($connexion)
{

    if (isset($_GET['id'])) {
        $id_user =  $_GET['id'];
        $sql = "DELETE FROM `user` WHERE id = ?";

        $stmt = $connexion->prepare($sql);

        $stmt->bind_param("i", $id_user);


        $stmt->execute();


        $stmt->close();
    } else {
        echo "No product ID provided for deletion.";
    }
}


function CreateUser($connexion)
{




    if (isset($_POST['submit'])) {

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $id_role = $_POST['id_role'];
        $password = $_POST['password'];

        $sql = "INSERT INTO `user` (`firstName`, `lastName`, `email`, `id_role`, `password`) VALUES (?, ?, ?, ?, ?)";

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
}



function JoinUserRole($connexion)
{
    $sql = "SELECT user.id AS id, user.firstName AS name, user.lastName AS nme, user.email AS email, role.nom AS roleName 
            FROM `user` 
            INNER JOIN role ON user.id_role = role.id";

    $result = $connexion->query($sql);

    if (!$result) {
        die("Error: " . $connexion->error);
    }

    return $result;
}
