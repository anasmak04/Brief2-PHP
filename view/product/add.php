<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/add.css">
    <title>Document</title>
</head>

<body>
    <?php include "../../controller/Product/add.php";
    include "../../controller/Product/show.php"
    ?>
    <form action="add.php" method="post">
        <input type="text" name="nom" placeholder="nom">
        <select name="categoryNom" id="categoryNom">
            <option value="" selected disabled>Select Category</option>
            <?php
            foreach ($categories as $category) {
                echo "<option value='" . $category . "'>" . $category . "</option>";
            }
            ?>
        </select>
        <input type="text" name="Description" placeholder="Description">
        <input type="text" name="status" placeholder="status">
        <select name="teamNom" id="teamNom">
            <option value="" selected disabled>Select Team</option>
            <?php
            foreach ($teams as $team) {
                echo "<option value='" . $team . "'>" . $team . "</option>";
            }
            ?>
        </select>        <input type="price" name="price" placeholder="price">
        <button type="submit" name="submit">save</button>
    </form>
</body>

</html>