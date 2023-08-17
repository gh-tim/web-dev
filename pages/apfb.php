<?php 

$db=mysqli_connect('localhost','root','','foodbank');
$sql = "SELECT * FROM foodbanks WHERE fbID='1524';";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {

	// output data of each row

	while($row=mysqli_fetch_assoc($result)) {

	?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angel's Pantry Food Bank</title>
    <link rel="icon" type="image/x-icon" href="../images/heart.png">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <a href="userindex.php" class="logo">
            <img class="foodaid" src="../images/logo.png" alt="food aid foundation">
        </a>
        <ul class="top-links">
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="fdf.php">COLLECTIONS</a></li>
			<li><a href="usersearch.php">FOOD BANKS</a></li>
			<li><a href="login.php" class="logout-button">LOG OUT</a></li>	
        </ul>
    </div>
	
<div class="bg-pic">   
<div class="google-maps-section">
    <h1 class="food-bank-title">Angel's Pantry Food Bank</h1>
    <div class="google-maps-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7935651173943!2d101.7609525101669!
        3d3.1490926531405514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc36fd318745df%3A0xe7f2ffcdb935e
        417!2s16%2C%20Jalan%20Ampang%2C%20Kampung%20Melayu%20Ampang%2C%2068000%20Ampang%2C%20Selangor!5e0!3m2!1sen!2smy
        !4v1690182133377!5m2!1sen!2smy" width="800" height="600" style="border:0;" 
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="map-details">
            <h2>Details</h2>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Location: 16, Jalan Ampang, Kampung Melayu Ampang, 68000 Ampang, Selangor</p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Person-In-Charge: Angel Wang</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:angelspantry@gmail.com">Contact: angelspantry@gmail.com</a></p>
        </div>
    </div>
</div>
</div>

<div class="footer">
    <div class="footer-title">Copyright @ FAF 2023</div>
</div>

<?php
    }
}
    ?>
</body>

</html>