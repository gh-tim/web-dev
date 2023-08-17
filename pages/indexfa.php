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

    <body id="indexfa-page">
	    <div class="header">
		    <a href="../index.php" class="logo">
				<img class="foodaid" src="../images/logo.png" alt="food aid foundation">
			</a>
		    <ul class="top-links">
			    <li><a href="about.php">ABOUT US</a></li>
			    <li><a href="fdf.php">COLLECTIONS</a></li>
				<li><a href="pages/fbdisplay.php">FOOD BANKS</a></li>
				<li><a href="login.php" class="logout-button">LOG OUT</a></li>	
		    </ul>
	    </div>
        
        <section class="container">
			<div class="card">
				<a href="fbdisplay.php"><img src="../images/food3.jpg" alt="food bank" class="card-img">Food Banks</a>
			</div>
			<div class="card">
				<a href="requestlist.php"><img src="../images/food2.jpg" alt="food donation collection" class="card-img">Food Donation Collections</a>
			</div>
            <div class="card">
				<a href="userdisplay.php"><img src="../images/food1.jpg" alt="member" class="card-img">Manage Users</a>
			</div>
		</section>


		<div class="footer">
			<div class="footer-title">Copyright @ FAF 2023</div>
        </div>
    </body>
</html>