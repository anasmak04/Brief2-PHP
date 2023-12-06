<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/add.css">
    <title>Document</title>
</head>
<body>


                <?php include "../../controller/user/Create.php" ?>

                <form action="add.php" method="post" class="sign-in-form">
                
                    <h2 class="title">Insert New User</h2>
                    
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

                    <div class="input-field">
                        <lord-icon src="https://cdn.lordicon.com/ccrgnftl.json" trigger="in" delay="2000" style="width:60px;height:30px">
                        </lord-icon>
                        <input type="number" name="id_role" placeholder="id_role" />
                    </div>

                    <button type="submit" class="btn solid" name="submit">save</button>
                    
                </form>
</body>
</html>