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
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
		<form method="post" action="fbupdate.php">
		<div class="pic">
			<div class="form-box">
				<div><br>
					<h1 class="label">Update Foodbank Information</h1>
				</div><br>	
				<div><br>
					<label class="alabel">Foodbank ID:</label>
                    <input type="number" class="input-group" id="fbID" name="fbID" 
                    value=<?php echo $fbID; ?> />
				</div><br>
				<div><br>
					<label class="alabel">Foodbank Name:</label>
					<input type="text" class="input-group" id="fbName" name="fbName"
                    value=<?php echo $fbName; ?> />
				</div><br>
				<div><br>
					<label class="alabel">Foodbank Description:</label>
					<input type="text" class="input-group" id="fbDescription" name="fbDescription"
                    value=<?php echo $fbDescription; ?> />
				</div><br>
				<div><br>
					<label class="alabel">Foodbank Address:</label>
					<input type="text" class="input-group" id="fbAddress" name="fbAddress"
                    value=<?php echo $fbAddress; ?> />
				</div><br>
				<div><br>
					<label class="alabel">Foodbank Person In Charge:</label>
					<input type="text" class="input-group" id="fbPIC" name="fbPIC"
                    value=<?php echo $fbPIC; ?> />
				</div><br>
				<div><br>
					<label class="alabel">Foodbank Contacts:</label>
					<input type="text" class="input-group" id="fbContacts" name="fbContacts"
                    value=<?php echo $fbContacts; ?> />
				</div><br>
				<div><br>
            	<button type="submit" name="update" class="button" > Update </button>
        		</div><br>

                <button><a href="fbdisplay.php">Return</button>
			</div>
		</div>
		</form>
</body>
</html>