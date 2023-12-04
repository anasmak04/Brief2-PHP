<?php





//function CreateCategory(){
    return "INSERT INTO `category` (`nom`) VALUES (?)";
//}

//function CreateTeam(){
    return "INSERT INTO `team` (`nom`) VALUES (?)";
//}



function DeleteProduct($connexion){
    if (isset($_GET['id'])) {
        $product_id = mysqli_real_escape_string($connexion,  $_GET['id']);
        $sql = "DELETE FROM `product` WHERE id='$product_id'";
        $result = $connexion->query($sql);
    
    }
}

function GetAllProducts($connexion){
    $sql = "SELECT * FROM `product`";
    $result = $connexion->query($sql);
    
    
    $sql1 = "SELECT DISTINCT id FROM `category`";
    $result1 = $connexion->query($sql1);
    
    
    $sql2 = "SELECT DISTINCT id FROM `team`";
    $result2 = $connexion->query($sql2);
    
    $categories = array();
    $teams = array();
    
    if ($result1->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {
            $categories[] = $row['id'];
        }
    }
    
    if ($result2->num_rows > 0) {
        while ($row = $result2->fetch_assoc()) {
            $teams[] = $row['id'];
        }
    }
    
    return $result;
}

function UpdateProduct($connexion){
    if (isset($_POST["submit"])) {

        $id_pr = $_POST["id"];
        $nom = $_POST["nom"];
        $id_category = $_POST['id_category'];
        $description = $_POST['Description'];
        $status = $_POST['status'];
        $id_team = $_POST['id_team'];
        $price = $_POST['price'];
    
        
    $sql = "UPDATE `product` SET `nom`=?, `Description`=?, `id_category`=?, `status`=?, `id_team`=?, `price`=? WHERE id = ?";
        $stmt = $connexion->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("ssisidi", $nom, $description, $id_category, $status, $id_team, $price, $id_pr);
            if ($stmt->execute()) {
                echo "Update done successfully!";
                header("location:show.php");
            } else {
                echo "Error Description: " . $stmt->error;
            }
        } else {
            echo "Error Description: " . $connexion->error;
        }
    }
}


function ProductCreate($connexion){
    

    if (isset($_POST["submit"])) {
        $nom = $_POST["nom"];
        $description = $_POST['Description'];
        $status = $_POST['status'];
        $price = $_POST['price'];
        $id_category = $_POST["id_category"];
        $id_team = $_POST["id_team"];
    
        $sql = "INSERT INTO `product`(`nom`, `Description`, `id_category`, `status`, `id_team`, `Price`) VALUES (?, ?, ?, ?, ?, ?)";
    
        $stmt = $connexion->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("ssisis", $nom, $description, $id_category, $status, $id_team, $price);
    
            if ($stmt->execute()) {
                echo "Insert done successfully!";
                header("location: show.php");
                exit();
            } else {
                echo "Error Description: " . $stmt->error;
            }
        } else {
            echo "Error Description: " . $connexion->error;
        }
    }
}



?>