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

    <body id="usersearch-page">
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
		
		<div class="usersearch-hero">
            <div class="usersearch-title">
                <div class="main-text">Search for Food Banks</div>
			</div>
		</div>
        
		<form method="post" action="usersearch.php">
			<div class="usersearch-box">		
                <?php
				$db=mysqli_connect('localhost','root','','foodbank');

				$search="";

				if(isset($_POST['submit'])&& $_POST['submit']=="Go"){
					$search=$_POST['search'];
				}
				?>

				<form name="fSearch" id="fSearch" action="usersearch.php" method="POST">
				<input type="text" class="search-usersearch" name="search" value="<?php echo $search;?>" placeholder="Search:">
				<input type="submit" class="go-button" name="submit" value="Go">
				</form>
			</div>
		
			<div class="btn-container fbdisplay">
				<button class="btn2"><a href="index.php" class="return-link">Home</a></button>
			</div>

			<section class="foodbank-container">
			
			<?php
            
                    if($search=="")
            
                        $sql = "SELECT * FROM foodbanks;";
            
                    else
                        $sql="SELECT * FROM foodbanks WHERE fbName LIKE '%$search%' OR fbAddress LIKE '%$search%' OR fbID LIKE '$search';";
        
                    $result = mysqli_query($db, $sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $fbID= $row['fbID'];
                        $fbName= $row['fbName'];
                        $fbDescription= $row['fbDescription'];
                        $fbAddress= $row['fbAddress'];
                        $fbPIC= $row['fbPIC'];
                        $fbContacts= $row['fbContacts'];
                        $fileName= $row['fileName'];
                        echo '
						<div class="foodbank-card">
						<a href="'.$fileName.'" class="text" style="color: #ffffff; font-size: 20px;">
                            Foodbank ID: '.$fbID.'<br>
                            Foodbank Name: '.$fbName.'<br>
                            Description: '.$fbDescription.'<br>
                            Address: '.$fbAddress.'<br>
                            Person in Charge: '.$fbPIC.'<br>
                            Contact: '.$fbContacts.'
                          </a>
						</div>'; 
                    }
                ?>
			</section>
			</div>
			
		


		<div class="footer">
			<div class="footer-title">Copyright @ FAF 2023</div>
        </div>
    </body>
</html>