<?php
include 'connection.php';

    //delete function
    if(isset($_GET['approved'])){
        $requestID = $_GET['approved'];
        $sql = "UPDATE  request SET status= 'Approved' WHERE requestID=$requestID";
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
