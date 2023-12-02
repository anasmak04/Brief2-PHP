<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/add.css">
    <title>Document</title>
</head>

<body>
    <?php include "../../controller/Blog/update.php"; ?>

    <?php
    if (isset($_GET['id'])) {
        $id_blog = $_GET['id'];
        $sql = "SELECT * FROM `blog` WHERE `id`='$id_blog'";
        $result = $connexion->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $nom = $row["nom"];
                $status = $row['status'];
                $description = $row['description'];
                $id_user = $row['id_user'];
                $price = $row['Price'];
            }
        }
    }
    ?>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $id_blog; ?>"> <!-- Hidden input for ID -->
        <input type="text" name="nom" placeholder="nom" value="<?= $nom; ?>">
        <input type="text" name="status" placeholder="status" value="<?= $status; ?>">
        <input type="text" name="description" placeholder="Description" value="<?= $description; ?>">
        <input type="number" name="id_user" placeholder="id_user" value="<?= $id_user; ?>">
        <input type="price" name="price" placeholder="price" value="<?= $price; ?>">
        <button type="submit" name="submit">save</button>
    </form>
</body>

</html>
