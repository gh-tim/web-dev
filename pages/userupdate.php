<?php include ('connection.php');
    $userID = $_GET['updateuser'];
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

    if(isset($_POST['update'])){
        $userID = $_POST['userID'];
        $userName = $_POST['userName'];
        $userEmail = $_POST['userEmail'];
        $userNumber = $_POST['userNumber'];
        $userICNumber = $_POST['userICNumber'];
        $userAddress = $_POST['userAddress'];
        $userPassword = $_POST['userPassword'];

        $sql = "UPDATE user SET userID='$userID', userName='$userName', userEmail='$userEmail', userNumber='$userNumber', 
        userICNumber='$userICNumber', userAddress='$userAddress', userPassword='$userPassword' WHERE userID=$userID";
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
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
		<form method="post" action="userupdate.php">
		<div class="pic">
			<div class="form-box">
				<div><br>
					<h1 class="label">Update Account Information</h1>
				</div><br>	
				<div><br>
					<label class="alabel">User ID:</label>
                    <input type="text" class="input-group" id="userID" name="userID" 
                    value=<?php echo $userID; ?> />
				</div><br>
				<div><br>
					<label class="alabel">User Name:</label>
					<input type="text" class="input-group" id="userName" name="userName"
                    value=<?php echo $userName; ?> />
				</div><br>
				<div><br>
					<label class="alabel">Email:</label>
					<input type="email" class="input-group" id="userEmail" name="userEmail"
                    value=<?php echo $userEmail; ?> />
				</div><br>
				<div><br>
					<label class="alabel">Telephone Number:</label>
					<input type="number" class="input-group" id="userNumber" name="userNumber"
                    value=<?php echo $userNumber; ?> />
				</div><br>
				<div><br>
					<label class="alabel">IC Number:</label>
					<input type="number" class="input-group" id="userICNumber" name="userICNumber"
                    value=<?php echo $userICNumber; ?> />
				</div><br>
				<div><br>
					<label class="alabel">Address:</label>
					<input type="text" class="input-group" id="userAddress" name="userAddress"
                    value=<?php echo $userAddress; ?> />
				</div><br>
                <div><br>
					<label class="alabel">Password:</label>
					<input type="password" class="input-group" id="userPassword" name="userPassword"
                    value=<?php echo $userPassword; ?> />
				</div><br>
				<div><br>
            	<button type="submit" name="update" class="button" > Update </button>
        		</div><br>

                <button><a href="userdisplay.php">Return</button>
			</div>
		</div>
		</form>
</body>
</html>