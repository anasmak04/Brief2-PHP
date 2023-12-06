<?php
include "../model/blog.php";

function CreateBlog($connexion)
{

    if (isset($_POST["submit"])) {
        $nom = $_POST["nom"];
        $status = $_POST['status'];
        $description = $_POST['description'];
        $id_user = $_POST['id_user'];
        $price = $_POST['price'];

        $sql = blogCreate();
        $stmt = $connexion->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("sssii", $nom, $status, $description, $id_user, $price);
            if ($stmt->execute()) {
                echo "Insert done successfully!";
                header("location:show.php");
            } else {
                echo "Error Description: " . $stmt->error;
            }
        } else {
            echo "Error Description: " . $connexion->error;
        }
    }
}

function DeleteBlog($connexion)
{

    if (isset($_GET['id'])) {
        $blog_id = $_GET['id'];

        $sql =  blogDelete();

        $stmt = $connexion->prepare($sql);

        $stmt->bind_param("i", $blog_id);


        $stmt->execute();


        $stmt->close();
    } else {
        echo "No product ID provided for deletion.";
    }
}

function GetAllBlogs($connexion)
{
    $sql = blogGetAll();
    $result = $connexion->query($sql);

    return $result;
}

function UpdateBlog($connexion)
{

    if (isset($_POST["submit"])) {
        $id = $_POST["id"];
        $nom = $_POST["nom"];
        $status = $_POST['status'];
        $description = $_POST['description'];
        $id_user = $_POST['id_user'];
        $price = $_POST['price'];

        $sql = blogUpdate();
        $stmt = $connexion->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("sssidi", $nom, $status, $description, $id_user, $price, $id);
            if ($stmt->execute()) {
                echo "Update done successfully!";
                header("location: show.php");
            } else {
                echo "Error Description: " . $stmt->error;
            }
        } else {
            echo "Error Description: " . $connexion->error;
        }
    }
}
