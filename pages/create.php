<?php include ('connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration Form</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
		<form method="post" action="create.php">
		<div class="pic">
			<div class="form-box">
				<div><br>
					<h1 class="label">Register An Account</h1>
				</div><br>	
				<div><br>
					<label class="alabel">User ID:</label>
					<input type="number" class="input-group" id="userID" name="userID" />
				</div><br>
				<div><br>
					<label class="alabel">User Name:</label>
					<input type="text" class="input-group" id="userName" name="userName" />
				</div><br>
				<div><br>
					<label class="alabel">Email:</label>
					<input type="email" class="input-group" id="userEmail" name="userEmail" />
				</div><br>
				<div><br>
					<label class="alabel">Telephone Number:</label>
					<input type="number" class="input-group" id="userNumber" name="userNumber" />
				</div><br>
				<div><br>
					<label class="alabel">IC Number:</label>
					<input type="number" class="input-group" id="userICNumber" name="userICNumber" />
				</div><br>
				<div><br>
					<label class="alabel">Address:</label>
					<input type="text" class="input-group" id="userAddress" name="userAddress" />
				</div><br>
                <div><br>
					<label class="alabel">Password:</label>
					<input type="password" class="input-group" id="userPassword" name="userPassword" />
				</div><br>
				<div><br>
            	<button type="submit" name="submit" class="button" > Submit </button>
        		</div><br>
				<p class="hlink"><br>
            		Already have an account? <a href="login.php"> Login As User </a>
        		</p><br>
			</div>
		</div>
		</form>
</body>
</html>