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
<body>
    <?php
    include "../../controller/blog/add.php";
    include __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

    $sql = "SELECT * FROM user WHERE id_role = 1";
    $result = $connexion->query($sql);
    ?>
    <form action="add.php" method="post">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="status" placeholder="status">
        <input type="text" name="description" placeholder="Description">
        <select name="id_user" id="id_user">
            <option value="" disabled>Select a user</option>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['id'] . '">' . $row['firstName'] . '</option>';
                }
            }
            ?>
        </select>
        <input type="price" name="price" placeholder="price">
        <button type="submit" name="submit">save</button>
    </form>
</body>

</html>
