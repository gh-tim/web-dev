<!DOCTYPE html>
<html>
	<head>
		<title>Donation Request List</title>
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
	
	<body id="requestlist-page">
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
	
		<div class="requestlist-hero">
            <div class="requestlist-title">
                <div class="main-text">Requests</div>
			</div>
		</div> 
		
		<div class="requestlist-box">
        <form method="post" action="requestlist.php">
			<?php
			$db=mysqli_connect('localhost','root','','foodbank');

			$search="";

			if(isset($_POST['submit'])&& $_POST['submit']=="Go"){
            $search=$_POST['search'];
			}
			?>
			<form name="fSearch" id="fSearch" action="requestlist.php" method="POST">

			<input type="text" class="search-requestlist"name="search" value="<?php echo $search;?>" placeholder="Search:">

			<input type="submit" class="go-button" name="submit" value="Go">
        </form>
        </div>    
			
		<div class="btn-container fbdisplay">
			<button class="btn2"><a href="indexfa.php" class="return-link">Home</a></button>
		</div>
			
			<div class="fbdisplay-table">
				<table class="styled-fbdisplay-table">
					<tr class="header-row">
						<th>Request ID</th>
						<th>User ID</th>
						<th>Foodbank ID</th>
						<th>Pax</th>
						<th>Description</th>
						<th>Date</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
					<?php
            
						if($search=="")
            
							$sql = "SELECT * FROM request;";
            
						else
							$sql="SELECT * FROM request WHERE uUserID LIKE '%$search%' OR requestID LIKE '%$search%' OR fFbID LIKE '%$search%' OR description LIKE '$search' OR dateRequest LIKE '$search';";
        
						$result = mysqli_query($db, $sql);
						while($row=mysqli_fetch_assoc($result))
						{
							$requestID= $row['requestID'];
							$uUserID= $row['uUserID'];
							$fFBId= $row['fFBId'];
							$pax= $row['pax'];
							$description= $row['description'];
							$dateRequest= $row['dateRequest'];
							$status= $row['status'];
							echo '<tr>
								<td>'.$requestID.'</td>
								<td>'.$uUserID.'</td>
								<td>'.$fFBId.'</td>
								<td>'.$pax.'</td>
								<td>'.$description.'</td>
								<td>'.$dateRequest.'</td>
								<td>'.$status.'</td>
								<td>
								<button type="button" style="border: none; background-color: transparent; text-decoration: underline;" class="update" name="update"><a href="approve.php?approved='.$requestID.'" class="text operation-link">Approve</button>
								<button type="button" style="border: none; background-color: transparent; text-decoration: underline;" class="delete" name="delete"><a href="reject.php?rejected='.$requestID.'" class="text operation-link">Reject</button>
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