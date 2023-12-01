<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/add.css">
    <title>Document</title>
</head>


<body>
    <?php include "../../controller/Product/update.php" ?>
    <form action="update.php" method="post">

    <?php
            if (isset($_GET['id'])) {
                $produit_id =   $_GET['id'];
                $sql = "SELECT * FROM `product` WHERE `id`='$produit_id'";
                $result = $connexion->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
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
        <input type="number" name="id_category"  value="<?= $id_category  ?>" placeholder="id_category">
        <input type="text" name="Description"   value="<?= $description_produit  ?>" placeholder="Description">
        <input type="text" name="status"   value="<?= $status  ?>"  placeholder="status">
        <input type="number" name="id_team"   value="<?= $id_team  ?>" placeholder="id_team">
        <input type="price" name="price"   value="<?= $price  ?>" placeholder="price">
        <button type="submit" name="submit">save</button>
    </form>
</body>

</html>