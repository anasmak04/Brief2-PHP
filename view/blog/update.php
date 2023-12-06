<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/add.css">
    <title>Document</title>
</head>

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
</style>

<body>
    <?php include "../../controller/Blog/update.php";
    include __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

    $sql10 = "SELECT * FROM user WHERE id_role = 1";
    $result10 = $connexion->query($sql10);
    ?>

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
        <select name="id_user" id="id_user">
            <option value="" disabled>Select a user</option>
            <?php
            if ($result10->num_rows > 0) {
                while ($row = $result10->fetch_assoc()) {
                    echo '<option value="' . $row['id'] . '">' . $row['firstName'] . '</option>';
                }
            }
            ?>
        </select>
        <input type="price" name="price" placeholder="price" value="<?= $price; ?>">
        <button type="submit" name="submit">save</button>
    </form>
</body>

</html>