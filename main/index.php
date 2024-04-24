<?php 
    require_once("db_conn.php");
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
        <div>
            <a href="./attendance">Attendance</a>
            <a href="./teacher">Students</a>
        </div>
</body>
</html>