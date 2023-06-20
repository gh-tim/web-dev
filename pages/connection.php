<?php
	session_start();

	$id="";
	$name="";
	$userEmail="";
	$userNumber=""; 
	$userICNumber="";
	$userAddress="";
	$password="";
	$Error=array();
	
	//connecting to database
	$db=mysqli_connect('localhost','root','','sunwaybank');
	
	//when submit is clicked
	if (isset($_POST['submit'])) {
		$userID = mysqli_real_escape_string($db,$_POST['userID']);
		$userName = mysqli_real_escape_string($db,$_POST['userName']);
		$userEmail = mysqli_real_escape_string($db,$_POST['userEmail']);
		$userNumber = mysqli_real_escape_string($db,$_POST['userNumber']);
		$userICNumber = mysqli_real_escape_string($db,$_POST['userICNumber']);
		$userAddress = mysqli_real_escape_string($db,$_POST['userAddress']);
		$userPassword = mysqli_real_escape_string($db,$_POST['userPassword']);
		if(count($Error) == 0) {
			$userPassword=($userPassword);
			$sql = "INSERT INTO user ( userID , userName , userEmail , userNumber , userICNumber, userAddress, userPassword) VALUES('$userID','$userName','$userEmail','$userNumber','$userICNumber','$userAddress','$userPassword')";
			mysqli_query($db,$sql);
			$_SESSION['userName'] = $userName;
			$_SESSION['userID'] = $userID;
            header('location:index.php');//brings to index
			
		}		
	}
	
	//form for login
	if (isset($_POST['login'])) {
		$userID =mysqli_real_escape_string($db,$_POST['userID']);
		$userName =mysqli_real_escape_string($db,$_POST['userName']);
		$userPassword =mysqli_real_escape_string($db,$_POST['userPassword']);
		$sql = "SELECT * FROM user WHERE userID = '$userID' && userName = '$userName' && userPassword = '$userPassword'";
		$result = mysqli_query($db,$sql);
        if((mysqli_num_rows($result))!=1) 
        {
            echo '<script>alert("User ID or password entered is wrong")</script>';
            header("url=login.php");
        }
        elseif (count($Error) == 0) {
			$query = "SELECT * FROM user WHERE userID = '$userID' && userName = '$userName' && userPassword = '$userPassword'";
			$result = mysqli_query($db,$query);
			$row = mysqli_fetch_assoc($result);
			if (mysqli_num_rows($result) == 1) {
				$_SESSION['userID'] = $userID;
				$_SESSION['userName'] = $userName;
				$_SESSION['userPassword'] = $userPassword;
				if ($row['role'] == 'user'){
					header('location:index.php');//brings to index
				}
				elseif($row['role'] == 'admin'){
					header('location:indexfa.php');//brings to index
				}
			} else {
				array_push($Error,"Not matching");
			}
		}

	}

	//when entry is clicked
	if (isset($_POST['entry'])) {
		$fbID = mysqli_real_escape_string($db,$_POST['fbID']);
		$fbName = mysqli_real_escape_string($db,$_POST['fbName']);
		$fbDescription = mysqli_real_escape_string($db,$_POST['fbDescription']);
		$fbAddress = mysqli_real_escape_string($db,$_POST['fbAddress']);
		$fbPIC = mysqli_real_escape_string($db,$_POST['fbPIC']);
		$fbContacts = mysqli_real_escape_string($db,$_POST['fbContacts']);
		if(count($Error) == 0) {
			$sql = "INSERT INTO foodbanks ( fbID , fbName , fbDescription , fbAddress , fbPIC, fbContacts) VALUES('$fbID','$fbName','$fbDescription','$fbAddress','$fbPIC','$fbContacts')";
			mysqli_query($db,$sql);
			echo '<script>alert("Entry was successful")</script>';
			header('location:index.php');//brings to index
			
		}	

	}


	

	
	
