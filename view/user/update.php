<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/add.css">
    <title>Document</title>
</head>


<body>
    <?php include "../../controller/user/update.php";
    ?>


    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT `firstName`, `lastName`, `email`, `id_role` FROM `user` WHERE id = '$id' ";
        $result = $connexion->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $nom = $row["firstName"];
                $lastname = $row['lastName'];
                $email = $row['email'];
                $id_role = $row['id_role'];
            }
        }
    }
    ?>




<form action="update.php" method="post">
    <input type="text" name="firstName" placeholder="First Name" value="<?= htmlspecialchars($nom); ?>">
    <input type="text" name="lastName" placeholder="Last Name" value="<?= htmlspecialchars($lastname); ?>">
    <input type="text" name="email" placeholder="Email" value="<?= htmlspecialchars($email); ?>">
    <input type="number" name="id_role" placeholder="Role ID" value="<?= htmlspecialchars($id_role); ?>">
    <input type="hidden" name="id" value="<?= htmlspecialchars($_GET['id'] ?? ''); ?>">
    <button type="submit" name="submit">Save</button>
</form>
</body>

</html>