<?php
    $name = $_POST['name'];
    $pswd = $_POST['pswd'];

    if($name == "admin" && $pswd == "2189"){
        echo"correct";
        header("Location:../home/index.php");
    }else{
        echo"wrong";
    }
?>