<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <link rel="stylesheet" href="../../public/css/style.css">
    <!-- js link -->
    <script src="../../public/js/script.js" defer></script>
    <title>Login</title>
</head>

<body>
    <?php include "../../controller/register/register.php"; ?>

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="register.php" method="post" class="sign-in-form">
                    <h2 class="title">Register</h2>
                    <div class="input-field">
                        <lord-icon src="https://cdn.lordicon.com/zfmcashd.json" trigger="in" delay="2000" style="width:60px;height:30px">
                        </lord-icon>
                        <input type="text" name="firstName" placeholder="first Name" />
                    </div>
                    <div class="input-field">
                        <lord-icon src="https://cdn.lordicon.com/zfmcashd.json" trigger="in" delay="2000" style="width:60px;height:30px">
                        </lord-icon>
                        <input type="text" name="lastName" placeholder="last Name" />
                    </div>
                    <div class="input-field">
                        <lord-icon src="https://cdn.lordicon.com/wwpzpqta.json" trigger="in" delay="2000" style="width:60px;height:30px">
                        </lord-icon>
                        <input type="email" name="email" placeholder="Email" />
                    </div>

<!--                     
                    <div class="input-field">
                        <lord-icon src="https://cdn.lordicon.com/ccrgnftl.json" trigger="in" delay="2000" style="width:60px;height:30px">
                        </lord-icon>
                        <input type="number" name="id_role" placeholder="id_role" />
                    </div> -->
                    <div class="input-field">
                        <lord-icon src="https://cdn.lordicon.com/ccrgnftl.json" trigger="in" delay="2000" style="width:60px;height:30px">
                        </lord-icon>
                        <input type="password" name="password" placeholder="password" />
                    </div>


                    <div class="input-field">
                        <lord-icon src="https://cdn.lordicon.com/ccrgnftl.json" trigger="in" delay="2000" style="width:60px;height:30px">
                        </lord-icon>
                        <input type="password" name="confirmPassword" placeholder="confirm your password" />
                    </div>
                    <button type="submit" class="btn solid" name="submit">save</button>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Welcome to the agency store</h3>
                    <p>
                        SPECIALIZES IN THE CREATION OF WEBSITES & APPLICATIONS, DIGITAL MARKETING, CONSULTING, EVENTS, PRODUCTION OF ADVERTISING VIDEOS, GRAPHIC DESIGN, 3D ANIMATION.


                    </p>
                    <a style="padding: 10px; text-decoration:none;" href="../login/login.php" class="btn transparent" id="sign-up-btn">
                        Login
                        </a>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>

        </div>
    </div>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
</body>

</html>