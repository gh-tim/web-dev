<?php include ('connection.php');?>
<!DOCTYPE html>
<html>
<head>
    <title> User Login Page </title>
    <link rel="stylesheet" type="text/css" href="">
</head>
<body>
        <form method="post" action="login.php">
            <div class="pic">
                <div class="form-box">
                    <div><br>
                        <h1 class="label">Login</h1>
                    </div><br>
                    <div><br>
                        <label class="alabel"> User ID: </label>
                        <input type="text" name="userID" class="input-group">
                    </div><br>
                    <div><br>
                        <label class="alabel"> User Name: </label>
                        <input type="text" name="userName" class="input-group">
                    </div><br>
                    <div><br>
                        <label class="alabel"> Password: </label>
                        <input type="password" name="userPassword" class="input-group">
                    <div><br>
                        <button type="submit" name="login" class="button" > Login </button>
                    </div><br>
                    <p class="hlink"><br>
                        Don't have an account? <a href="create.php" class="submit"> Creat An Account </a>
                    </p><br>
                </div>
            </div>
        </form>
</body>
</html>