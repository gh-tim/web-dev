<?php include ('connection.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Meals I Long For</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Gloock&display=swap" rel="stylesheet">
	<link href="https://fonts.cdnfonts.com/css/minion-pro" rel="stylesheet">
</head>

<body>
	
<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="clickable brand"><a href="index.php">Restaurantly</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="indexfa.php">Home</a></li>
          <li><a class="nav-link scrollto" href="fbform.php">Foodbank Entry</a></li>
          <li><a class="nav-link scrollto" href="fbdisplay.php">Foodbanks List</a></li>
          <li><a class="nav-link scrollto" href="userdisplay.php">users List</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a>

    </div>
  </header><!-- End Header -->

   
	<div class="hero">
		<div class="texts">
			<div class="main-text">Meals I Long For</div>
			<div class="sec-text">
				Good food is much more than sustenance and nutrients. It is a lifestyle and a choice. Bring out the Epicurean in you.
		</div>
			<div class="btn-container">
				<a href="./cuisines.html">
					<button class="btn">Explore Recipes</button>
				</a>
			</div>
		</div>
	</div>

		<div class="content">
            <div class="introduction">
				<div class="intro-text">
					<div class="intro-main">For Cooks, By Cooks.</div>
					<div class="intro-sec">
						Cooking is difficult and MILF understands that. We are a group of like-minded individuals united through food. We aim to 
							spread the joys of comfort foods from all backgrounds, because food sees no differences. This website is designed to be a one-stop 
							website to help you serve hearty and delicious meals, with recipes and clear instructions. Better yet, the development of 
							this website is to help those who do not have the knowledge or time to cook cheap, easy-to-make, and healthy meals. We wish to encourage others 
							to eat healthier and treat their body well amidst their hectic schedules. We hope that through this website, we will prove that healthy 
							eating can be done and be equally as flavorful as the unhealthy options.
					</div>
				</div>
				<div class="pic">
					<img src="../images/chef.jpg" alt="chef plating a dish">
				</div>
			</div>
			
			<div class="title">
                Comfort Foods — Made Elegant.
            </div>

            <div class="food-con">
                <div class="description">
                	<a href="mcd.html"><img src="../images/mcd.jpg" alt="chicken pot pie"></a>
                	McDonalds McMuffin
                </div>

                <div class="description">
                    <img src="../images/frenchonion.jpg" alt="french onion soup">
                    French Onion Soup with Gruyere Cheese
                </div>

                <div class="description">
                	<img src="../images/cinnamonroll.png" alt="cinnamon roll">
                	Godiva Chocolat Noir Pecan Cinnamon Rolls
                </div>

                <div class="description">
                    <img src="../images/boba.jpg" alt="boba tea">
                    Koicha Hokkaido Milk Latte and Konjac
                </div>
            </div>

			<span class="quote">
				"The art of living well and the art of dying well are one."
				<span class="epicurus">
					— Epicurus
				</span>
			</span>
        </div>
	
		<div class="footer">
			<div class="footer-title">Copyright @ Meals I Long For 2023</div>
        </div>
	</body>
</html>