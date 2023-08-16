<?php 

$db=mysqli_connect('localhost','root','','foodbank');
$sql = "SELECT * FROM foodbanks WHERE fbID='1522';";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {

	// output data of each row

	while($row=mysqli_fetch_assoc($result)) {

	?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Harvest Hope Food Bank</title>
		<link rel="icon" type="image/x-icon" href="../images/heart.png">
	    <link rel="stylesheet" type="text/css" href="../style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto&display=swap" rel="stylesheet">
<head>
    <body>
		<div class="header">
			<a href="../index.php" class="logo">
            <img class="foodaid" src="../images/logo.png" alt="food aid foundation">
			</a>
			<ul class="top-links">
				<li><a href="pages/about.html">ABOUT US</a></li>
				<li><a href="fdf.php">COLLECTIONS</a></li>
				<li><a href="#">USER</a></li>
				<li><a href="pages/login.html" id="signuplogin">SIGN UP / LOGIN</a></li>
			</ul>
		</div>
	
        <div class="title-box">
            <div class="info-box">
                <h1 class="name-head"> <?php echo $row["fbName"]?> Person-In-Charge: <?php echo $row["fbPIC"]?> </h1><br>
                <p class="description-box"> <?php echo $row["fbDescription"]?> </p><br>
                <p class=> Person-In-Charge: <?php echo $row["fbPIC"]?> </p><br>
            </div>
        </div>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.485143672925!2d103.75780689678955!3d1.
            4812112999999953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da6d32211bf9ef%3A0x73f1d43bc506d6d1!2s
            Pusat%20Makanan%20Cedar%20Point!5e0!3m2!1sen!2smy!4v1690182042230!5m2!1sen!2smy" width="800" height="600" 
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>


    <?php
    }
}
    ?>
</body>
</head>
</html>