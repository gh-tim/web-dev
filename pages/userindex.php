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

    <body>
	    <div class="header">
		    <a href="userindex.php" class="logo">
				<img class="foodaid" src="../images/logo.png" alt="food aid foundation">
			</a>
		    <ul class="top-links">
			    <li><a href="about.php">ABOUT US</a></li>
			    <li><a href="fdf.php">COLLECTIONS</a></li>
				<li><a href="usersearch.php">FOOD BANKS</a></li>
				<li><a href="login.php" class="logout-button">LOG OUT</a></li>	
		    </ul>
	    </div>
		
	    <div class="hero">
            <div class="texts">
                <div class="main-text">Inspired by Hunger, Nourished by Hope.</div>
					
		        <div class="sec-text">
                    The Food Aid Foundation in Malaysia is dedicated to bridging the gap between food surplus and those in need, ensuring that no one in our 
					community goes to bed hungry. Together, we aim to create a community where every plate is filled, and every heart is nourished with hope.
                </div>

            </div>
			<img src="../images/foodbank1.jpg" alt="people in a food bank">
	    </div>

		<div class="content">
            <div class="introduction">
				<div class="intro-text">
					<div class="intro-main">Malaysia faces a threat of rising food insecurity.</div>
					<div class="intro-sec">
						Data from the Malaysian Adult Nutrition Survey 2014 showed that up to 25% of the population faced insufficient food quantity and variety, 
						with a higher prevalence observed among low-income households.
					</div>
				</div>
			</div>
			
			<div class="title">
                What We Offer
            </div>

			<div class="food-con">

                <div class="description">
                	<a href="fdf.php"><img src="../images/food2.jpg" alt="food donation collection"></a>
                	Request a Food Donation Collection	
                </div>

                <div class="description">
                	<a href="usersearch.php"><img src="../images/food3.jpg" alt="food bank"></a>
                	Search and View Food Bank Information
                </div>
            </div>
        </div>

		<div class="footer">
			<div class="footer-title">Copyright @ FAF 2023</div>
        </div>
    </body>
</html>