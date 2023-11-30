<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php require_once "../../controller/login/login.php"; ?>

    <form action="login.php" method="post">
        <input type="text" name="email" required placeholder="Enter your Email"><br>
        <input type="password" name="password" required placeholder="Enter your password"><br>
        <button class="registerbtn" type="submit" name="submit">Register</button>
        <hr>

        <p>Already registered? <a href="register.php">register</a></p>
    </form>
</body>

</html>