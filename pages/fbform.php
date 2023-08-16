<?php include ('connection.php');?>
<!DOCTYPE html>
<html>
	<head>
		<title> Food Bank Data Entry Page</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/x-icon" href="../images/heart.png">
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto&display=swap" rel="stylesheet">
		<script src="main.js"></script>
	</head>

	<body id="fbform-page">
		<div class="header">
		    <a href="../index.php" class="logo">
				<img class="foodaid" src="../images/logo.png" alt="food aid foundation">
			</a>
		    <ul class="top-links">
			    <li><a href="pages/about.html">ABOUT US</a></li>
			    <li><a href="fdf.php">COLLECTIONS</a></li>
                <li><a href="#">USER</a></li>
		    </ul>
	    </div>

		<section class="fbform"> 
			<form method="post" action="fbform.php">
				<div class="fbform-box">
					<div><br>
                        <h1 class="fbform-title">FOOD BANK DATA ENTRY</h1>
                    </div>
					
                    <div><br>
                        <label class="alabel"></label>
                        <input type="text" name="fbID" class="input-group" placeholder="Food Bank ID:" required>
                    </div>
					
                    <div><br>
                        <label class="alabel"></label>
                        <input type="text" name="fbName" class="input-group" placeholder="Food Bank Name:" required>
                    </div>
					
                    <div><br>
                        <label class="alabel"></label>
                        <input type="text" name="fbDescription" class="input-group" placeholder="Description:" required>
                    </div>
					
                    <div><br>
                        <label class="alabel"></label>
                        <input type="text" name="fbAddress" class="input-group" placeholder="Address:" required>
                    </div>
					
                    <div><br>
                        <label class="alabel"></label>
                        <input type="text" name="fbPIC" class="input-group" placeholder="Person In Charge:" required>
                    </div>
					
                    <div><br>
                        <label class="alabel"></label>
                        <input type="number" name="fbContacts" class="input-group" placeholder="Phone Number:" required>
					</div>	
						
                    <div><br>
                        <button type="submit" name="entry" class="entry-button" >Submit</button>
						<button class="btn2"><a href="indexfa.php" class="return-link">Home</a></button>
					</div>
				</div>
			</form>
		</section>
	
		<div class="footer">
			<div class="footer-title">Copyright @ FAF 2023</div>
		</div>
	</body>
</html>