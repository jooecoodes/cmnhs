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
    <div class="main-div-center">
        <div class="div1-center div-center">
            <p>Welcome, <?= $_SESSION['teacherFname']?></p>
            <a href="./attendance/">attendance</a>
            <a href="./teacher/">students</a>
        </div>
        <div class="div2-center div-center">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, odio necessitatibus? Tempore, explicabo? Repellendus quidem totam amet dignissimos facere, molestias sequi recusandae enim nisi et tempore itaque similique quaerat fugiat!
        </div>
    </div>
    
    
</body>
</html>