<?php
    $conn = mysqli_connect("localhost","root","","datahub");

    if(!$conn){
        die("does not connect".mysqli_error($conn));
    }else{
        //echo"Connected successfully";
    }

    mysqli_close($conn);
?>