<?php include ('connection.php');?>
<!DOCTYPE html>
<html lang="en">
    <?php

    ?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Foodbank Donation Form</title>
		<link rel="icon" type="image/x-icon" href="../images/heart.png">
	    <link rel="stylesheet" type="text/css" href="../style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto&display=swap" rel="stylesheet">
	</head>
    <body>
    <body id="login-page">
	    <div class="header">
		    <a href="index.php" class="logo">
				<img class="foodaid" src="../images/logo.png" alt="food aid foundation">
			</a>
		    <ul class="top-links">
                <li><a href="search.php">SEARCH</a></li>
			    <li><a href="pages/about.html">ABOUT US</a></li>
			    <li><a href="#">COLLECTIONS</a></li>
                <li><a href="#">USER</a></li>
				<li><a href="../pages/login.html" id="signuplogin">SIGN UP / LOGIN</a></li>
		    </ul>
	    </div>
		
        <section class="login"> 
		    <form method="post" action="fdf.php">
                <div class="login-form-box">
                    <div><br>
                        <h1 class="login-title">FOODBANK DONATION FORM</h1>
                    </div>

                    <div><br>
                        <label class="alabel"></label><br>
                        <input type="text" name="uUserID" class="input-group" placeholder="User ID: " required>
                    </div>

                    <div><br>
                    <label class="alabel">Foodbank:</label><br>
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
                    </div>

                    <div><br>
                        <label for="description">Description</label>
                        <textarea id="description" name="description" rows="6" cols="50" placeholder="Type of food donating, days free for food donation, eg...">
                        </textarea>
                    </div>
                    
                    <div><br>
                        <label class="alabel">Pax</label><br>
                        <input type="number" name="pax" class="input-group" placeholder="Pax: " required>
                    </div>

                    <div><br>
                        <label class="alabel">Date Requested For Collection:</label><br>
                        <input type="datetime-local" name="dateRequest" class="input-group" placeholder="Date: " required>
                    </div>

                    <div><br>
                        <button type="submit" name="submit-form-request" class="login-button" >Submit</button>
                    </div>

                    <p class="hlink"><br>
                    Don't have an account?<a href="create.php" class="create-link"> Create One Now</a>
                    </p>
                </div>
                <?php
                $db=mysqli_connect('localhost','root','','foodbank');

                $search="";

                if(isset($_POST['submit'])&& $_POST['submit']=="Go"){
                    $search=$_POST['search'];
                }
                ?>

                Search: <input type="text" name="search" value="<?php echo $search;?>">

                <input type="submit" name="submit" value="Go">

                </form>
                    
                    <div class="table">
                        <h1>RequestS</h1>
                        <table>
                            <tr>
                                <th>Request ID</th>
                                <th>User ID</th>
                                <th>Foodbank ID</th>
                                <th>Description</th>
                                <th>Pax</th>
                                <th>Date</th>
                                <th>Status</th>
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