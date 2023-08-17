<?php include ('connection.php');?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Food Bank Donation Collection</title>
		<link rel="icon" type="image/x-icon" href="../images/heart.png">
	    <link rel="stylesheet" type="text/css" href="../style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto&display=swap" rel="stylesheet">
	</head>
    
	<body id="fdf-page">
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
		
        <section class="fdf"> 
		    <form method="post" action="fdf.php">
                <div class="fdf-box">
                    <div><br>
                        <h1 class="fdf-title">FOOD BANK DONATION COLLECTION</h1>
                    </div>

                    <div><br>
                        <label class="alabel"></label><br>
                        <input type="text" name="uUserID" class="input-group" placeholder="User ID: ">
                    </div><br>

                    <div><br>
                    <label class="alabel fdf-radio">Foodbank:</label><br>
                    <?php
                    $db=mysqli_connect('localhost','root','','foodbank');
                    $sql = "SELECT * FROM foodbanks;";
                    $result = mysqli_query($db, $sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                            $fbID= $row['fbID'];
                            $fbName= $row['fbName'];
                            echo '
                            <input type="radio" name="foodbank" value="'.$fbID.'">
                            <label>'.$fbName.'</label><br>
                            ';
                    }
                    ?>
                    </div><br>

                    <div><br>
                        <label for="description">Description:</label><br>
                        <textarea id="description" name="description" rows="6" cols="50" placeholder="Describe the type of food etc."></textarea>
                    </div>
                    
                    <div><br>
                        <label class="alabel"></label><br>
                        <input type="number" name="pax" class="input-group" placeholder="Pax:">
                    </div>

                    <div><br>
                        <label class="alabel"></label><br>
                        <input type="datetime-local" name="dateRequest" class="input-group" placeholder="Date: ">
                    </div>

                    <div><br>
                        <button type="submit" name="submit-form-request" class="login-button" >Submit</button>
                    </div>
				</div>  
		</section> 			
				<h1 class="requests-title">Requests</h1><br>		
				<div class="btn-container fdf">

					
					<?php
					$db=mysqli_connect('localhost','root','','foodbank');

					$search="";

					if(isset($_POST['submit'])&& $_POST['submit']=="Go"){
                    $search=$_POST['search'];
					}
					?>

					<input type="text" class="search-fdf" name="search" value="<?php echo $search;?>" placeholder="Search:">

					<input type="submit" class="go-button" name="submit" value="Go">
				</div>
				   
				<div class="fbdisplay-table">
					<table class="styled-fbdisplay-table">
						<tr class="header-row">
                                <th>Request ID</th>
                                <th>User ID</th>
                                <th>Foodbank ID</th>
                                <th>Description</th>
                                <th>Pax</th>
                                <th>Date</th>
                                <th>Status</th>
						</tr>
                        <?php
                        $userID = $_SESSION['userID'];
                            if($search=="")
                                $sql = "SELECT * FROM request WHERE uUserID = '$userID'";
                    
                            else
                                $sql="SELECT * FROM request WHERE  uUserID = '$userID' AND fbID LIKE '%$search%' OR requestID LIKE '%$search%' OR description LIKE '%$search%' OR dateRequest LIKE '$search' OR dateRequest LIKE '$search';";
                
                            $result = mysqli_query($db, $sql);
                            while($row=mysqli_fetch_assoc($result))
                            {
                                $requestID= $row['requestID'];
                                $uUserID= $row['uUserID'];
                                $fFbID= $row['fFbID'];
                                $description= $row['description'];
                                $pax= $row['pax'];
                                $dateRequest= $row['dateRequest'];
                                $status= $row['status'];
                                echo '<tr>
                                    <td>'.$requestID.'</td>
                                    <td>'.$uUserID.'</td>
                                    <td>'.$fFbID.'</td>
                                    <td>'.$description.'</td>
                                    <td>'.$pax.'</td>
                                    <td>'.$dateRequest.'</td>
                                    <td>'.$status.'</td>
                                </tr>'; 
                            }
                        ?>
					</table>
				</div>
            </form>
          

		<div class="footer">
			<div class="footer-title">Copyright @ FAF 2023</div>
        </div>
    </body>
</html>