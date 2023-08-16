<?php include ('connection.php');?>
<!DOCTYPE html>
<html>
	<head>
		<title>User Data Update Page</title>
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
	<body id=userdisplay-page>
		<div class="header">
		    <a href="../index.php" class="logo">
				<img class="foodaid" src="../images/logo.png" alt="food aid foundation">
			</a>
		    <ul class="top-links">
			    <li><a href="pages/about.html">ABOUT US</a></li>
			    <li><a href="fdf.php">COLLECTIONS</a></li>
                <li><a href="#">USER</a></li>
		    </ul>
	    </div>
		
		<div class="userdisplay-hero">
            <div class="userdisplay-title">
                <div class="main-text">Users</div>
			</div>
		</div>
	
		<div class="btn-container fbdisplay">
			<button class="btn2"><a href="indexfa.php" class="return-link">Home</a></button>
		</div>
		
        <form method="post" action="userdisplay.php">
			<div class="fbdisplay-table">
				<table class="styled-fbdisplay-table">
					<tr class="header-row">
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>User IC Number</th>
                        <th>User Email</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Operations</th>
					</tr>
                <?php
                    $sql = "SELECT * FROM user";
                    $result = mysqli_query($db, $sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $userID= $row['userID'];
                        $userName= $row['userName'];
                        $userICNumber= $row['userID'];
                        $userEmail= $row['userEmail'];
                        $userAddress= $row['userAddress'];
                        $userNumber= $row['userNumber'];
                        $userPassword= $row['userPassword'];
                        $role= $row['role'];
                        echo '<tr>
                            <td>'.$userID.'</td>
                            <td>'.$userName.'</td>
                            <td>'.$userICNumber.'</td>
                            <td>'.$userEmail.'</td>
                            <td>'.$userAddress.'</td>
                            <td>'.$userNumber.'</td>
                            <td>'.$userPassword.'</td>
                            <td>'.$role.'</td>
                            <td>
                            <button type="button" style="border: none; background-color: transparent; text-decoration: underline;" class="update" name="update"><a href="userupdate.php?updateuser='.$userID.'" class="text operation-link">Update</button>
                            <button type="button" style="border: none; background-color: transparent; text-decoration: underline;" class="delete" name="delete"><a href="userdelete.php?deleteid='.$userID.'" class="text operation-link">Delete</button>
                            </td>  
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