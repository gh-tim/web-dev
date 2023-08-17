<?php include ('connection.php');?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Food Aid Foundation</title>
		<link rel="icon" type="image/x-icon" href="../images/heart.png">
	    <link rel="stylesheet" type="text/css" href="../style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto&display=swap" rel="stylesheet">
	</head>

    <body id="login-page">
	    <div class="header">
		    <a href="../index.php" class="logo">
				<img class="foodaid" src="../images/logo.png" alt="food aid foundation">
			</a>
		    <ul class="top-links">
			    <li><a href="about.php">ABOUT US</a></li>
			    <li><a href="fdf.php">COLLECTIONS</a></li>
		    </ul>
	    </div>
		
        <section class="login"> 
		    <form method="post" action="login.php">
                <div class="login-form-box">
                    <div><br>
                        <h1 class="login-title">LOGIN</h1>
                    </div>

                    <div><br>
                        <label class="alabel"></label><br>
                        <input type="text" name="userID" class="input-group" placeholder="User ID: " required>
                    </div>

                    <div><br>
                        <label class="alabel"></label><br>
                        <input type="text" name="userName" class="input-group" placeholder="Username: " required>
                    </div>

                    <div><br>
                        <label class="alabel"></label><br>
                        <input type="password" name="userPassword" class="input-group" placeholder="Password: " required>
                    </div>
                
                    <div><br>
                        <button type="submit" name="login" class="login-button" >Login</button>
                    </div>

                    <p class="hlink"><br>
                    Don't have an account?<a href="create.php" class="create-link"> Create One Now</a>
                    </p>
                </div>
            </form>

            <div class="login-pic">
                <img src="../images/foodbank2.jpg" alt="woman with food">
            </div>
        </section>   

		<div class="footer">
			<div class="footer-title">Copyright @ FAF 2023</div>
        </div>
    </body>
</html>