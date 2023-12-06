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
    <?php
    include "../../controller/Product/add.php";
    include __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

    $sql = "SELECT * FROM `team`";
    $result = $connexion->query($sql);

    $sql1 = "SELECT * FROM `category`";
    $result1 = $connexion->query($sql1);
    ?>


    <h2 style="text-align: center;">Insert New Product</h2>
    <form action="add.php" method="post">
        <input type="text" name="nom" placeholder="nom">

        <select name="id_category" id="id_category">
            <option value="" disabled>select a category</option>
            <?php
            if ($result1->num_rows > 0) {
                while ($row1 = $result1->fetch_assoc()) {
                    echo '<option value="' . $row1['id'] . '">' . $row1['nom'] . '</option>';
                }
            }
            ?>
        </select>

        <input type="text" name="Description" placeholder="Description">
        <input type="text" name="status" placeholder="status">

        <select name="id_team" id="id_team">
            <option value="" disabled>Select Team</option>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['id'] . '">' . $row['nom'] . '</option>';
                }
            }
            ?>
        </select>

        <input type="price" name="price" placeholder="price">
        <button type="submit" name="submit">save</button>
    </form>
</body>

</html>