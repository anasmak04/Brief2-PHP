<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/add.css">
    <title>Document</title>
</head>


<body>
    <?php include "../../controller/blog/add.php" ?>
    <form action="add.php" method="post">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="status" placeholder="status">
        <input type="text" name="description" placeholder="Description">
        <input type="number" name="id_user" placeholder="id_user">
        <input type="price" name="price" placeholder="price">
        <button type="submit" name="submit">save</button>
    </form>
</body>

</html>