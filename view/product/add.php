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
    ?>


    <h2 style="text-align: center;">Insert New Product</h2>
    <form action="add.php" method="post">
    <input type="text" name="nom" placeholder="nom">
       <input type="number" name="id_category" placeholder="id_category">
        <input type="text" name="Description" placeholder="Description">
        <input type="text" name="status" placeholder="status">
        <input type="number" name="id_team" placeholder="id_team">
        <input type="price" name="price" placeholder="price">
        <button type="submit" name="submit">save</button>
    </form>
</body>

</html>
