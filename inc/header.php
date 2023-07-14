<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/home-1.css">
    <script src="../js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="row1">
            <div class="cont">
                <li class="logo">
                    <img src="../img/logo.png" alt="logo">
                </li>
                <li>MyData <span>hub</span></li>
            </div>
            

        </div>
        <div class="row2">
            <li id="icon">
                <div></div>
                <div></div>
                <div></div>
            </li>
            <li> <a href="index.php">HOME</a></li>
            <li> <a href="addData.php"> ADD DATA</a></li>
            <li> <a href="showData.php"> SHOW DATA</a></li>
            <li> <a href="#"></a> MAIL</li>
            <li id="form" onclick="fun()">LOGOUT</li>
        </div>

        
        <script>
            function fun(){
                window.location="../index.php";
            }
        </script>
        
        <script>
            $(Document).ready(function(){
                $("#icon").click(function(){
                    $(".row2 li:not(:first-child)").fadeToggle();
            });

        });
        </script>