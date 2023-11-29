<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <?php require_once "../../controller/register/register.php"; ?>

    <form action="register.php" method="post">
        <input type="text" name="firstName" placeholder="Enter your firstName"><br>
        <input type="text" name="lastName" placeholder="Enter your lastName"><br>
        <input type="text" name="email" required placeholder="Enter your Email"><br>
        <input type="password" name="password" required placeholder="Enter your password"><br>
        <input type="password" name="confirmPassword" required placeholder="confrm your password"><br>

        <button class="registerbtn" type="submit" name="submit">Register</button>
        <hr>

        <p>Already registered? <a href="login.php">Login</a></p>
    </form>
</body>

</html>