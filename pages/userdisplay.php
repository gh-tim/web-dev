<?php include ('connection.php');?>
<!DOCTYPE html>
<html>
<head>
    <title> User Data Update Page </title>
    <link rel="stylesheet" type="text/css" href="">
</head>
<body>
        <form method="post" action="userdisplay.php">
            <div class="table">
                <table>
                    <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>User IC Number</th>
                        <th>User Email</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Operations</th>
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
                            <button type="button" class="update" name="update"><a href="userupdate.php?updateuser='.$userID.'" class="text">Update</button>
                            <button type="button" class="delete" name="delete"><a href="userdelete.php?deleteid='.$userID.'" class="text">Delete</button>
                            </td>  
                        </tr>'; 
                    }
                ?>
            </div>
        </form>
</body>
</html>