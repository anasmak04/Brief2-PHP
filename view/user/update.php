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
    <?php include "../../controller/user/update.php";

    include __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";
    $sql10 = "SELECT * FROM role";
    $result10 = $connexion->query($sql10);
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
        <select name="id_role" id=id_role">
            <option value="" disabled>Select a user</option>
            <?php
            if ($result10->num_rows > 0) {
                while ($row = $result10->fetch_assoc()) {
                    echo '<option value="' . $row['id'] . '">' . $row['nom'] . '</option>';
                }
            }
            ?>
        </select>

        <button type="submit" name="submit">Save</button>
    </form>
</body>

</html>