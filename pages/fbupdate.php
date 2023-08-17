<?php include ('connection.php');
    $fbID = $_GET['updatefb'];
    $sql = "SELECT * FROM foodbanks WHERE fbID = $fbID";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_assoc($result);

    $fbID = $row['fbID'];
    $fbName = $row['fbName'];
    $fbDescription = $row['fbDescription'];
    $fbAddress = $row['fbAddress'];
    $fbPIC = $row['fbPIC'];
    $fbContacts = $row['fbContacts'];

    if(isset($_POST['update'])){
        $fbID = $_POST['fbID'];
        $fbName = $_POST['fbName'];
        $fbDescription = $_POST['fbDescription'];
        $fbAddress = $_POST['fbAddress'];
        $fbPIC = $_POST['fbPIC'];
        $fbContacts = $_POST['fbContacts'];

        $sql = "UPDATE 'foodbanks' SET fbID='$fbID', fbName='$fbName', fbDescription='$fbDescription', fbAddress='$fbAddress', 
        fbPIC='$fbPIC', fbContacts='$fbContacts' WHERE fbID=$fbID";
        $result = mysqli_query($db,$sql);
        if($result){
            echo "Updated Successfully";
        }
        else{
            die(mysqli_error($db));
        }
    }

    
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Update Foodbank Information</title>
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
	
	<body id="fbupdate-page">
		<div class="header">
		    <a href="indexfa.php" class="logo">
				<img class="foodaid" src="../images/logo.png" alt="food aid foundation">
			</a>
		    <ul class="top-links">
			    <li><a href="about.php">ABOUT US</a></li>
			    <li><a href="fdf.php">COLLECTIONS</a></li>
				<li><a href="usersearch.php">FOOD BANKS</a></li>
				<li><a href="login.php" class="logout-button">LOG OUT</a></li>	
		    </ul>
	    </div>
	
		<section class="fbupdate">
			<form method="post" action="fbupdate.php">
				<div class="fbupdate-box">
					<div><br>
						<h1 class="fbupdate-title">Update Food Bank Information</h1>
					</div>
				
					<div><br>
						<label class="alabel"></label>
						<input type="number" class="input-group" id="fbID" name="fbID" placeholder="Food Bank ID:" required value=<?php echo $fbID; ?>>
					</div>
				
					<div><br>
						<label class="alabel"></label>
						<input type="text" class="input-group" id="fbName" name="fbName" placeholder="Food Bank Name:" required value=<?php echo $fbName; ?>>
					</div>
				
					<div><br>
						<label class="alabel"></label>
						<input type="text" class="input-group" id="fbDescription" name="fbDescription" placeholder="Food Bank Description:" required value=<?php echo $fbDescription; ?>>
					</div>
				
					<div><br>
						<label class="alabel"></label>
						<input type="text" class="input-group" id="fbAddress" name="fbAddress" placeholder="Food Bank Address:" required value=<?php echo $fbAddress; ?>>
					</div>
				
					<div><br>
						<label class="alabel"></label>
						<input type="text" class="input-group" id="fbPIC" name="fbPIC" placeholder="Food Bank Person In Charge:" required value=<?php echo $fbPIC; ?>>
					</div>
				
					<div><br>
						<label class="alabel"></label>
						<input type="text" class="input-group" id="fbContacts" name="fbContacts" placeholder="Food Bank Contacts:" required value=<?php echo $fbContacts; ?>>
					</div>
				
					<div><br>
					<button type="submit" name="update" class="update-button"> Update </button>
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