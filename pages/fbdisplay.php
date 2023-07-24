<!DOCTYPE html>
<html>
<head>
    <title> Foodbank Data Update Page </title>
    <link rel="stylesheet" type="text/css" href="">
</head>
<body>
        <form method="post" action="fbdisplay.php">
        <?php
        $db=mysqli_connect('localhost','root','','foodbank');

        $search="";

        if(isset($_POST['submit'])&& $_POST['submit']=="Go"){
            $search=$_POST['search'];
        }
        ?>
        <form name="fSearch" id="fSearch" action="fbdisplay.php" method="POST">

        Search: <input type="text" name="search" value="<?php echo $search;?>">

        <input type="submit" name="submit" value="Go">

        </form>
            <div class="table">
                <table>
                    <tr>
                        <th>Foodbank ID</th>
                        <th>Foodbank Name</th>
                        <th>Foodbank Description</th>
                        <th>Foodbank Address</th>
                        <th>Foodbank Person-In-Charge</th>
                        <th>Foodbank Contacts</th>
                        <th>Operations</th>
                <?php
            
                    if($search=="")
            
                        $sql = "SELECT * FROM foodbanks;";
            
                    else
                        $sql="SELECT * FROM foodbanks WHERE fbName LIKE '%$search%'OR fbAddress LIKE '%$search%';";
        
                    $result = mysqli_query($db, $sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $fbID= $row['fbID'];
                        $fbName= $row['fbName'];
                        $fbDescription= $row['fbDescription'];
                        $fbAddress= $row['fbAddress'];
                        $fbPIC= $row['fbPIC'];
                        $fbContacts= $row['fbContacts'];
                        echo '<tr>
                            <td>'.$fbID.'</td>
                            <td>'.$fbName.'</td>
                            <td>'.$fbDescription.'</td>
                            <td>'.$fbAddress.'</td>
                            <td>'.$fbPIC.'</td>
                            <td>'.$fbContacts.'</td>
                            <td>
                            <button type="button" class="update" name="update"><a href="fbupdate.php?updatefb='.$fbID.'" class="text">Update</button>
                            <button type="button" class="delete" name="delete"><a href="fbdelete.php?deletefb='.$fbID.'" class="text">Delete</button>
                            </td>  
                        </tr>'; 
                    }
                ?>
            </div>
        </form>
    <p><a href="indexfa.php">Return</a></p>
</body>
</html>