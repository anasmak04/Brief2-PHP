<?php
include __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

if (isset($_POST["submit"])) {
    $nom = $_POST["nom"];
    $description = $_POST['Description'];
    $status = $_POST['status'];
    $price = $_POST['price'];
    $team = $_POST['teamNom'];
    $category = $_POST['categoryNom'];

    $sql1 = "INSERT INTO `category` (`nom`) VALUES (?)";
    $sql2 = "INSERT INTO `team` (`nom`) VALUES (?)";

    $stmt1 = $connexion->prepare($sql1);
    $stmt2 = $connexion->prepare($sql2);

    if ($stmt1 && $stmt2) {
        $stmt1->bind_param("s", $category);
        $stmt2->bind_param("s", $team);

        $stmt1->execute();
        $stmt2->execute();


        $id_category = $connexion->insert_id;
        $id_team = $connexion->insert_id;


        $sql = "INSERT INTO `product`(`nom`, `Description`, `status`, `price`, `id_category`, `id_team`) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $connexion->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("sssiii", $nom, $description, $status, $price, $id_category, $id_team);

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
    } else {
        echo "Error preparing statements";
    }
}

?>
