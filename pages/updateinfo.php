<?php include ('connection.php');
    $userID = $_SESSION['userID'];
    $sql = "SELECT * FROM user WHERE userID = $userID";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_assoc($result);

    $userID = $row['userID'];
    $userName = $row['userName'];
    $userEmail = $row['userEmail'];
    $userNumber = $row['userNumber'];
    $userICNumber = $row['userICNumber'];
    $userAddress = $row['userAddress'];
    $userPassword = $row['userPassword'];
	$role = $row['role'];

    if(isset($_POST['update'])){
        $userID = $_POST['userID'];
        $userName = $_POST['userName'];
        $userEmail = $_POST['userEmail'];
        $userNumber = $_POST['userNumber'];
        $userICNumber = $_POST['userICNumber'];
        $userAddress = $_POST['userAddress'];
        $userPassword = $_POST['userPassword'];
		$role = $_POST['role'];

        $sql = "UPDATE user SET userID='$userID', userName='$userName', userEmail='$userEmail', userNumber='$userNumber', 
        userICNumber='$userICNumber', userAddress='$userAddress', userPassword='$userPassword', role='$role' WHERE userID=$userID";
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
		<title>Update Account Information</title>
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
	
	<body id="updateinfo-page">
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
		
		<section class="updateinfo">
			<form method="post" action="userupdate.php">
			<div class="updateinfo-box">
				<div><br>
					<h1 class="updateinfo-title">Update Account Information</h1>
				</div>	
				
				<div><br>
					<label class="alabel"></label>
                    <input type="text" class="input-group" id="userID" name="userID" placeholder="User ID:" value="<?php echo $userID; ?>" disabled/>
				</div>
				
				<div><br>
					<label class="alabel"></label>
					<input type="text" class="input-group" id="userName" name="userName" placeholder="Username:"  value="<?php echo $userName; ?>" />
				</div>
				
				<div><br>
					<label class="alabel"></label>
					<input type="email" class="input-group" id="userEmail" name="userEmail" placeholder="Email:" value="<?php echo $userEmail; ?>" />
				</div>
				
				<div><br>
					<label class="alabel"></label>
					<input type="number" class="input-group" id="userNumber" name="userNumber" placeholder="Telephone Number:" value="<?php echo $userNumber; ?>" />
				</div>
				
				<div><br>
					<label class="alabel"></label>
					<input type="number" class="input-group" id="userICNumber" name="userICNumber" placeholder="IC Number:"  value="<?php echo $userICNumber; ?>" />
				</div>
				
				<div><br>
					<label class="alabel"></label>
					<input type="text" class="input-group" id="userAddress" name="userAddress" placeholder="Address:" value="<?php echo $userAddress; ?>" />
				</div>
				
                <div><br>
					<label class="alabel"></label>
					<input type="password" class="input-group" id="userPassword" name="userPassword" placeholder="Password:" value="<?php echo $userPassword; ?>" />
				</div>
				
				<div><br>
					<label class="alabel"></label>
					<input type="text" class="input-group" id="role" name="role" placeholder="Role:" value="<?php echo $role; ?>" disabled/>
				</div>
				
				<div><br>
            	<button type="submit" name="update" class="update-button" >Update</button>
				<button class="btn2"><a href="index.php" class="return-link">Home</a></button>
        		</div>
			</div>
			</form>
		</section> 
		
		    <div class="footer">
				<div class="footer-title">Copyright @ FAF 2023</div>
			</div>
	</body>
</html>
