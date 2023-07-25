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

    <body id="create-page">
	    <div class="header">
		    <a href="../index.html" class="logo">
				<img class="foodaid" src="../images/logo.png" alt="food aid foundation">
			</a>
		    <ul class="top-links">
                <li><a href="#">SEARCH</a></li>
			    <li><a href="pages/about.html">ABOUT US</a></li>
			    <li><a href="#">COLLECTIONS</a></li>
                <li><a href="#">USER</a></li>
				<li><a href="../pages/login.html" id="signuplogin">SIGN UP / LOGIN</a></li>
		    </ul>
	    </div>
		
        <section class="create"> 
		    <form method="post" action="create.php">
                <div class="create-form-box">
                    <div><br>
                        <h1 class="create-title">SIGN UP</h1>
                    </div>	

                    <div><br>
                        <label class="alabel"></label>
                        <input type="number" class="input-group" id="userID" name="userID" placeholder="User ID:" required/>
                    </div>

                    <div><br>
                        <label class="alabel"></label>
                        <input type="text" class="input-group" id="userName" name="userName" placeholder="Username:" required/>
                    </div>

                    <div><br>
                        <label class="alabel"></label>
                        <input type="email" class="input-group" id="userEmail" name="userEmail" placeholder="Email:" required/>
                    </div>

                    <div><br>
                        <label class="alabel"></label>
                        <input type="number" class="input-group" id="userNumber" name="userNumber" placeholder="Telephone Number:" required/>
                    </div>

                    <div><br>
                        <label class="alabel"></label>
                        <input type="number" class="input-group" id="userICNumber" name="userICNumber" placeholder="IC Number:" required/>
                    </div>

                    <div><br>
                        <label class="alabel"></label>
                        <input type="text" class="input-group" id="userAddress" name="userAddress" placeholder="Address:" required/>
                    </div>

                    <div><br>
                        <label class="alabel"></label>
                        <input type="password" class="input-group" id="userPassword" name="userPassword" placeholder="Password:" required/>
                    </div>

                    <div><br>
                    <button type="submit" name="signup" class="signup-button" > Sign Up </button>
                    </div>

                    <p class="hlink"><br>
                    Already have an account?<a href="login.php" class="login-link"> Login Here</a>
                    </p>
                </div>
            </form>
        </section>   

		<div class="footer">
			<div class="footer-title">Copyright @ FAF 2023</div>
        </div>
    </body>
</html>