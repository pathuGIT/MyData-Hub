<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="row1">
            <div class="cont">
                <li class="logo">
                    <img src="img/logo.png" alt="logo">
                </li>
                <li>MyData <span>hub</span></li>
            </div>
            

        </div>
        <div class="row2">
            <li id="form">LOGIN</li>
            <li id="home">HOME</li>
        </div>
        <div class="row3">
            <div class="col1 same">
                <div>
                    <h3>MyData hub is data collection peoject.</h3>
                    <p>MyData Hub is a data collection project I created for my studies, focused on PHP, SQL, JS, jQuery, CSS, and HTML. It serves as a centralized hub for efficient data management, allowing users to input and store data easily. Through this project, I aim to enhance my knowledge and skills in web development technologies.</p>
                    <button>More info</button>
                </div>
                
            </div>
            <div class="col2 same">
                <div class="img">
                    <img id="img1" src="img/logo.png" alt="logo">
                </div>
                <div class="last">

                
                <form class="form" action="inc/directToHome.php" method="POST">
                    <h4>ADMIN LOGIN</h4>
                    <table>
                        <tr>
                            <td>User Name</td>
                            <td><input type="text" name="name" id="name"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="pswd" id="pswd"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="LOGIN" onclick="func()"></td>
                        </tr>
                    </table>
                </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(Document).ready(function(){
            $("#form").click(function(){
                $(".img").fadeOut(function(){
                    $(".form").fadeIn(function(){
                        $("#form").fadeOut(function(){
                            //document.getElementById("home").style.visibility = "visible";
                            $("#home").fadeIn();
                        });
                    });
                    
                    
                });
            });
            $("#home").click(function(){
                $(".form").fadeOut(function(){
                    $(".img").fadeIn(function(){
                        $("#home").fadeOut(function(){
                            $("#form").fadeIn();
                        });
                    });
                    
                    
                });
            });
            $("#img1").hover(function(){
                document.getElementById('img1').style.margin = "0 0 10px 10px";
                document.getElementById('img1').style.width = "350px";
            },function(){  
                document.getElementById('img1').style.margin = "0 0 0 0";
                document.getElementById('img1').style.width = "300px";
            }); 

        });

    </script>
</body>
</html>