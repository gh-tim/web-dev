<?php include ('connection.php');?>
<!DOCTYPE html>
<html>
<head>
    <title> Foodbank Data Entry Page </title>
    <link rel="stylesheet" type="text/css" href="">
</head>
<body>
        <form method="post" action="fbform.php">
            <div class="pic">
                <div class="form-box">
                    <div><br>
                        <h1 class="label">Foodbank Data Entry Page</h1>
                    </div><br>
                    <div><br>
                        <label class="alabel"> Foodbank ID: </label>
                        <input type="text" name="fbID" class="input-group">
                    </div><br>
                    <div><br>
                        <label class="alabel"> Foodbank Name: </label>
                        <input type="text" name="fbName" class="input-group">
                    </div><br>
                    <div><br>
                        <label class="alabel"> Description: </label>
                        <input type="text" name="fbDescription" class="input-group">
                    <div><br>
                    <div><br>
                        <label class="alabel"> Address: </label>
                        <input type="text" name="fbAddress" class="input-group">
                    <div><br>
                    <div><br>
                        <label class="alabel"> Person In Charge: </label>
                        <input type="text" name="fbPIC" class="input-group">
                    <div><br>
                    <div><br>
                        <label class="alabel"> Phone Number: </label>
                        <input type="number" name="fbContacts" class="input-group">
                    <div><br>
                        <button type="submit" name="entry" class="button" > Submit </button>
                    </div><br>
                    <p class="hlink"><br>
                        Don't have an account? <a href="create.php" class="submit"> Create An Account </a>
                    </p><br>
                </div>
            </div>
        </form>
</body>
</html>