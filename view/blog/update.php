<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/add.css">
    <title>Document</title>
</head>


<body>
    <?php include "../../controller/Blog/update.php";
        include "../../model/Blog.php";
    ?>

    <?php
            if (isset($_GET['id'])) {
                $produit_id =   $_GET['id'];
                $sql = GetAllBlogs();
                $result = $connexion->query($sql);

                $result->bind_param("i", $blog_id);
                $result->execute();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $nom = $_POST["nom"];
                        $status = $_POST['status'];
                        $description = $_POST['description'];
                        $id_user = $_POST['id_user'];
                        $price = $_POST['price'];
                        
                    }
                }
            }
            ?>
  

    <form action="update.php" method="post">
        <input type="text" name="nom" placeholder="nom" value="<?= $nom; ?>">
        <input type="text" name="status" placeholder="status" value="<?= $status; ?>">
        <input type="text" name="description" placeholder="Description" value="<?= $description; ?>">
        <input type="number" name="id_user" placeholder="id_user" value="<?= $id_user; ?>">
        <input type="price" name="price" placeholder="price" value="<?= $price; ?>">
        <button type="submit" name="submit">save</button>
    </form>
</body>

</html>