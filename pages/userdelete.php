<?php
include 'connection.php';

    //delete function
    if(isset($_GET['deleteid'])){
        $userID = $_GET['deleteid'];
        $sql = "DELETE FROM `user` WHERE userID=$userID";
        $result = mysqli_query($db, $sql);
        if($result){
            echo "Deleted Successfully";
        }
        else{
            die(mysqli_error($db));
        }
    }

    //button to head back
    echo '<button type="button"><a href="userdisplay.php">Return</button>';
?>
