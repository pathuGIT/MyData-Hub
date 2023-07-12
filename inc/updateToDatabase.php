<?php
require_once('../inc/connect.php');
session_start();

$index = $_POST['index'];
$bank = $_POST['bank'];
$name = $_POST['name'];
$accnum = $_POST['accnum'];
$birth = $_POST['birthdate'];
$city = $_POST['city'];
$cont = $_POST['contact'];
$email = $_POST['email'];
$Current_indexNo = $_SESSION['current_indeNo'];

$query = "UPDATE data SET indexNo = '$index', name = '$name', birthday = '$birth', city = '$city', contact = '$cont', email = '$email', bank = '$bank', account = '$accnum' WHERE indexNo = $Current_indexNo";

$result = mysqli_query($conn,$query);

if($result){
    echo"<script src='../js/code.jquery.com_jquery-3.7.0.min.js'></script>";
    echo"<script>";
    echo"    $(Document).ready(function(){";
    echo"        alert('Record Updated!', function(){});";
    echo"        window.location='../home/showData.php'";
    echo"    });";
    echo"</script>";
}else{
    echo"<script src='../js/code.jquery.com_jquery-3.7.0.min.js'></script>";
    echo"<script>";
    echo"    $(Document).ready(function(){";
    echo"        alert('Failed !', function(){});";
    echo"        window.location='../home/showData.php'";
    echo"    });";
    echo"</script>";
}

mysqli_close($conn);
?>

