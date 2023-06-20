<?php
include 'connection.php';

    //delete function
    if(isset($_GET['fbdeletefb'])){
        $fbID = $_GET['dfbeletefb'];
        $sql = "DELETE FROM `foodbanks` WHERE fbID=$fbID";
        $result = mysqli_query($db, $sql);
        if($result){
            echo "Deleted Successfully";
        }
        else{
            die(mysqli_error($db));
        }
    }

    //button to head back
    echo '<button type="button"><a href="fbdisplay.php">Return</button>';
?>
