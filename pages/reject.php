<?php
include 'connection.php';

    //delete function
    if(isset($_GET['rejected'])){
        $requestID = $_GET['rejected'];
        $sql = "UPDATE  request SET status= 'Rejected' WHERE requestID=$requestID";
        $result = mysqli_query($db, $sql);
        if($result){
            echo "Request has been rejected";
        }
        else{
            die(mysqli_error($db));
        }
    }

    //button to head back
    echo '<button type="button"><a href="requestlist.php">Return</button>';
?>