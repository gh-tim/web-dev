<?php include ('connection.php');?>
<?php

$search="";

if(isset($_POST['submit'])&& $_POST['submit']=="Go"){

	$key=$_POST['search'];

}

?>

<form name="fSearch" id="fSearch" action="lab6.4.php" method="POST">

Search: <input type="text" name="search" value="<?php echo $search;?>">

<input type="submit" name="submit" value="Go">

</form>

<?php

if($key=="")

	$sql = "SELECT * FROM foodbanks;";

else

	$sql="select * FROM foodbanks WHERE fbName LIKE '%$search%'OR fbAddress LIKE '%$search%';";

$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {

 // output data of each row

 while($row=mysqli_fetch_assoc($result)) {

?>

<?php

 }

} else {

 echo "0 results";

}

mysqli_close($conn);

?>
