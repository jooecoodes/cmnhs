<?php 
    require_once("db_conn.php");
    session_start(); 
    if(!isset($_SESSION['teacherId'])) {
        header("Location: ./login/");
    } else {

    
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
        
        <p>Welcome, <?= $_SESSION['teacherFname']?></p>

        <div>
            <a href="./attendance">Attendance</a>
            <a href="./teacher">Students</a>
        </div>
</body>
</html>

<?php 
    }

?>