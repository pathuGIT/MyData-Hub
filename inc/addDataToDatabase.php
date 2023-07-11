<?php
require_once('../inc/connect.php');

$index = $_POST['index'];
$bank = $_POST['bank'];
$name = $_POST['name'];
$accnum = $_POST['accnum'];
$birth = $_POST['birthdate'];
$city = $_POST['city'];
$cont = $_POST['contact'];
$email = $_POST['email'];

$query = "INSERT INTO data (indexNo,name,birthday,city,contact,email,bank,account) VALUES ('$index','$name','$birth','$city','$cont','$email','$bank','$accnum')";

$result = mysqli_query($conn,$query);

if($result){
    echo"<script src='../js/code.jquery.com_jquery-3.7.0.min.js'></script>";
    echo"<script>";
    echo"    $(Document).ready(function(){";
    echo"        alert('Record Added!', function(){});";
    echo"        window.location='../home/addData.php'";
    echo"    });";
    echo"</script>";
}else{
    echo"<script src='../js/code.jquery.com_jquery-3.7.0.min.js'></script>";
    echo"<script>";
    echo"    $(Document).ready(function(){";
    echo"        alert('Failed !', function(){});";
    echo"        window.location='../home/addData.php'";
    echo"    });";
    echo"</script>";
}

mysqli_close($conn);
?>

