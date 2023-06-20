<?php include ('connection.php');?>
<!DOCTYPE html>
<html>
<head>
    <title> Foodbank Data Update Page </title>
    <link rel="stylesheet" type="text/css" href="">
</head>
<body>
        <form method="post" action="fbdisplay.php">
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
</body>
</html>