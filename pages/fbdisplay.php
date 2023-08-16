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
		<script src="main.js"></script>
	</head>

    <body id="fbdisplay-page">
	    <div class="header">
		    <a href="../index.html" class="logo">
				<img class="foodaid" src="../images/logo.png" alt="food aid foundation">
			</a>
		    <ul class="top-links">
                <li><a href="#">SEARCH</a></li>
			    <li><a href="pages/about.html">ABOUT US</a></li>
			    <li><a href="#">COLLECTIONS</a></li>
                <li><a href="#">USER</a></li>
		    </ul>
	    </div>
		
		<div class="fbdisplay-hero">
            <div class="fbdisplay-title">
                <div class="main-text">Food Banks</div>
			</div>
		</div>
		
		<form method="post" action="fbdisplay.php">
            <div class="fbdisplay-box">
                <?php
                $db=mysqli_connect('localhost','root','','foodbank');

                $search="";

                if(isset($_POST['submit'])&& $_POST['submit']=="Go"){
                $search=$_POST['search'];
                }
                ?>
                <form name="fSearch" id="fSearch" action="fbdisplay.php" method="POST">

                <input type="text" class="search-fbdisplay" name="search" value="<?php echo $search;?>" placeholder="Search:">

                <input type="submit" class="go-button" name="submit" value="Go">
			</div>
		</form>
		
			<div class="btn-container fbdisplay">
			<button class="btn2"><a href="indexfa.php" class="return-link">Home</a></button>
			<button class="btn2"><a href="fbform.php">Add a Foodbank</a></button>
			</div>
			
			<div class="fbdisplay-table">
				<table class="styled-fbdisplay-table">
					<tr class="header-row">
						<th>Food Bank ID</th>
						<th>Name</th>
						<th>Description</th>
						<th>Location</th>
						<th>Person-In-Charge</th>
						<th>Food Bank Contacts</th>
						<th>Operations</th>
						</tr>
						<?php
            
						if($search=="")
                
							$sql = "SELECT * FROM foodbanks;";
                
						else
							$sql="SELECT * FROM foodbanks WHERE fbName LIKE '%$search%'OR fbAddress LIKE '%$search%';";
            
						$result = mysqli_query($db, $sql);
						while($row=mysqli_fetch_assoc($result))
						{
							$fbID= $row['fbID'];
							$fbName= $row['fbName'];
							$fbDescription= $row['fbDescription'];
							$fbAddress= $row['fbAddress'];
							$fbPIC= $row['fbPIC'];
							$fbContacts= $row['fbContacts'];
							echo '<tr>
								<td>'.$fbID.'</td>
								<td>'.$fbName.'</td>
								<td>'.$fbDescription.'</td>
								<td>'.$fbAddress.'</td>
								<td>'.$fbPIC.'</td>
								<td>'.$fbContacts.'</td>
								<td>
								<button type="button" style="border: none; background-color: transparent; text-decoration: underline;" class="update" name="update"><a href="fbupdate.php?updatefb='.$fbID.'" class="text operation-link">Update</button>
								<button type="button" style="border: none; background-color: transparent; text-decoration: underline;" class="delete" name="delete"><a href="fbdelete.php?deletefb='.$fbID.'" class="text operation-link">Delete</button>
								<button type="button" style="border: none; background-color: transparent; text-decoration: underline;" class="page" name="page"><a href="'.$fileName.'" class="text operation-link">Page</button>
								</td>  
							</tr>'; 
						}
						?>
				</table>
			</div>
        </form>
            </div>
            </form>
			

		<div class="footer">
			<div class="footer-title">Copyright @ FAF 2023</div>
        </div>
    </body>
</html>