<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/add.css">
    <title>Document</title>
    <style>
        select {
            margin: 10px;
            width: 500px;
            height: 40px;
            padding-left: 20px;
            border-radius: 5px;
            border: 1px solid var(--table-border);
            background-color: var(--sidebar);
            color: var(--sidebar-main-color);
        }
    </style>
</head>

<body>
    <?php include "../../controller/Product/update.php" ?>
    <form action="update.php" method="post">

        <?php

        include __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

        $sqlTeam = "SELECT * FROM `team`";
        $resultTeam = $connexion->query($sqlTeam);

        $sqlCategory = "SELECT * FROM `category`";
        $resultCategory = $connexion->query($sqlCategory);

        if (isset($_GET['id'])) {
            $produit_id = $_GET['id'];
            $sqlProduct = "SELECT * FROM `product` WHERE `id`='$produit_id'";
            $resultProduct = $connexion->query($sqlProduct);
            if ($resultProduct->num_rows > 0) {
                while ($row = $resultProduct->fetch_assoc()) {
                    $id_produit = $row['id'];
                    $nom_produit = $row['nom'];
                    $description_produit = $row['Description'];
                    $id_category = $row['id_category'];
                    $status = $row['status'];
                    $id_team = $row['id_team'];
                    $price = $row['price'];
                }
            }
        }
        ?>
        <input type="number" name="id" value="<?= $id_produit ?>" placeholder="id">
        <input type="text" name="nom" value="<?= $nom_produit ?>" placeholder="nom">
        <select name="id_category" id="id_category">
            <option value="" disabled>select a category</option>
            <?php
            if ($resultCategory->num_rows > 0) {
                while ($row1 = $resultCategory->fetch_assoc()) {
                    echo '<option value="' . $row1['id'] . '">' . $row1['nom'] . '</option>';
                }
            }
            ?>
        </select>
        <input type="text" name="Description" value="<?= $description_produit  ?>" placeholder="Description">
        <input type="text" name="status" value="<?= $status  ?>" placeholder="status">
        <select name="id_team" id="id_team">
            <option value="" disabled>Select Team</option>
            <?php
            if ($resultTeam->num_rows > 0) {
                while ($row = $resultTeam->fetch_assoc()) {
                    echo '<option value="' . $row['id'] . '">' . $row['nom'] . '</option>';
                }
            }
            ?>
        </select>
        <input type="price" name="price" value="<?= $price  ?>" placeholder="price">
        <button type="submit" name="submit">save</button>
    </form>
</body>

</html>
