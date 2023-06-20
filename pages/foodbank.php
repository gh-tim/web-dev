<?php include ('connection.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>hello there </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<form action="foodbankk.php" method="post">
	<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="clickable brand"><a href="index.php">Restaurantly</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#content">About</a></li>
          <li><a class="nav-link scrollto" href="foodbank.php">foodbank</a></li>
          <li><a class="nav-link scrollto" href="fbform.php">Food Bank Entry</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            	<li><a href="#">Donation</a></li>
            	<li><a href="#">Locations</a></li>
            </ul>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
		<?php
            	$sql = "SELECT * FROM foodbanks";
				$result = mysqli_query($db, $sql);
				while($row=mysqli_fetch_assoc($result))
				{
					$fbID= $row['fbID'];
					$fbName= $row['fbName'];
					$fbDescription= $row['fbDescription'];
					$fbAddress= $row['fbAddress'];
					$fbPIC= $row['fbPIC'];
					$fbContacts= $row['fbContacts'];
		?>

		<h1><?php echo $fbName; ?></h1>


		<?php
				}
		?>
		
</body>
</html>

