<?php
    
    if(isset($_GET["index"]))

        $index = $_GET["index"];

        $con = mysqli_connect("localhost","root","","datahub");

        $delte_query = "DELETE FROM data WHERE indexNO = $index";
        $delete_result = mysqli_query($con,$delte_query);
        if($delete_result){
            header("location:../home/showData.php");
        }else{
            echo"error";
        }
        mysqli_close($con);
    
?>