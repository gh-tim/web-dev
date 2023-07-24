<?php
$search="";

if(isset($_POST['submit'])&& $_POST['submit']=="Go"){
	$search=$_POST['search'];
}

?>
<!DOCTYPE html>
<html>
	<body>
	<form name="fSearch" id="fSearch" action="foodbank.php" method="POST">

	Search: <input type="text" name="search" value="<?php echo $search;?>">

	<input type="submit" name="submit" value="Go">

	</form>

	<?php
	$db=mysqli_connect('localhost','root','','foodbank');

	// Check connection
	if (!$db) {

	die("Connection failed: " . mysqli_connect_error());

	}

	if($search=="")

		$sql = "SELECT * FROM foodbanks;";

	else

		$sql="select * FROM foodbanks WHERE fbName LIKE '%$search%'OR fbAddress LIKE '%$search%';";

	$result = mysqli_query($db, $sql);



	if (mysqli_num_rows($result) > 0) {

	// output data of each row

	while($row=mysqli_fetch_assoc($result)) {

	?>

	<div class="fb-box"> 

	<p>

	<b>Foodbank Name:<b> <?php echo $row["fbName"]?> <br>

	<b>Description:<b> <?php echo $row["fbDescription"]?> <br>

	<b>Foodbank Address:<b> <?php echo $row["fbAddress"]?> <br>

	<b>Person-In-Charge:<b> <?php echo $row["fbPIC"]?> <br>

	<b>Contacts:<b> <?php echo $row["fbContacts"]?> <br>

	</div>

	<?php
	}

	} else {
	echo "0 results";
	}

	mysqli_close($db);
	?>



	<h3> <a href="index.php">Return</a></h3>
</body>
</html>