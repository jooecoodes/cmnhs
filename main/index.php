<?php 
    require_once("db_conn.php");
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <div id="background-img"></div>
    <div id="blob2"></div>
    <div id="blob"></div>
    <div class="main-div-center">
        <div class="div1-center div-center">
            <p><span id="welcome-header">Welcome, </span> <?= $_SESSION['teacherFname']?></p>
            <div id="navigation">
                <a href="./attendance/">attendance</a>
                <a href="./teacher/">students</a>
            </div>
        </div>
        <div class="div2-center div-center">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, odio necessitatibus? Tempore, explicabo? Repellendus quidem totam amet dignissimos facere, molestias sequi recusandae enim nisi et tempore itaque similique quaerat fugiat!
        </div>
    </div>
    
    
</body>
</html>