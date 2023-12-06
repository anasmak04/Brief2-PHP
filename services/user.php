<?php

include __DIR__ . "/../model/user.php";


function UpdateUser($connexion)
{

    if (isset($_POST["submit"])) {
        $id = $_POST["id"];
        $nom = $_POST["firstName"];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $id_role = $_POST['id_role'];

        $sql = userUpdateQuery();
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

    $sql = userGetAllQuery();
    $result = $connexion->query($sql);
}


function DeleteUser($connexion)
{

    if (isset($_GET['id'])) {
        $id_user =  $_GET['id'];

        if(empty($id_user)){
            echo "please the fieds are required";
            exit();
        }
        $sql = userDeleteQuery();

        $stmt = $connexion->prepare($sql);

        if($stmt){
        $stmt->bind_param("i", $id_user);


        $stmt->execute();


        $stmt->close();

        }
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

        if(empty($firstName) || empty($lastName) || empty($email) || empty($id_role) || empty($password)){
            echo "please all fields are required";
            exit();
        }
        $sql = userCreateQuery();

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
    $sql = UserRoleQuery();

    $result = $connexion->query($sql);

    if (!$result) {
        die("Error: " . $connexion->error);
    }

    return $result;
}
