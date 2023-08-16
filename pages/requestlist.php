<!DOCTYPE html>
<html>
<head>
    <title> Donation Request List </title>
    <link rel="stylesheet" type="text/css" href="">
    <script src="main.js"></script>
</head>
<body>
        <form method="post" action="requestlist.php">
        <?php
        $db=mysqli_connect('localhost','root','','foodbank');

        $search="";

        if(isset($_POST['submit'])&& $_POST['submit']=="Go"){
            $search=$_POST['search'];
        }
        ?>
        <form name="fSearch" id="fSearch" action="requestlist.php" method="POST">

        Search: <input type="text" name="search" value="<?php echo $search;?>">

        <input type="submit" name="submit" value="Go">

        </form>
            
            <div class="table">
                <table>
                    <tr>
                    <th>Request ID</th>
                    <th>User ID</th>
                    <th>Foodbank ID</th>
                    <th>Pax</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
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
                            <button type="button" class="update" name="update"><a href="approve.php?approved='.$requestID.'" class="text">Approve</button>
                            <button type="button" class="delete" name="delete"><a href="reject.php?rejected='.$requestID.'" class="text">Reject</button>
                            </td>  
                        </tr>'; 
                    }
                ?>
            </div>
        </form>
        <div class="form-box" style="display:none;">
            <div><br>
                <h1 class="label">Foodbank Data Entry Page</h1>
            </div><br>
            <div><br>
                <label class="alabel"> Foodbank ID: </label>
                <input type="text" name="fbID" class="input-group">
            </div><br>
        </div>
        <button type="button" id="show" value="Show Div" onclick="showDiv()">Show</button>
    <p><a href="indexfa.php">Return</a></p>
</body>
</html>