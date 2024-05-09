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
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container min-vw-100 d-flex min-vh-100 justify-content-center align-items-center">

        <div class="p-4 rounded bg-white">

            <p>Welcome, <?= $_SESSION['teacherFname']?></p>
    
            <div>
                <button onclick="window.location.href='./attendance'" class="btn btn-primary">Scan QR</button>
                <a href="./teacher/manage-stud.php" class="btn btn-primary  ">List of Students</a>
                <a href="logout.php" class="btn btn-danger">Log out</a>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
    }

?>