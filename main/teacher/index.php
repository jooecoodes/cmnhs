<?php
session_start();
if (isset($_SESSION['teacherId'])){
    $studNo = (isset($_GET["stud_no"])) ? htmlspecialchars($_GET["stud_no"]) : 0;

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
    <script src="teacher.js"></script>

    <link rel="stylesheet" href="Teacher.css">
    <title>Document</title>
</head>
<body>


    <a href="manage-stud.php">Manage Students</a>
   <button id="logoutBttn">log out</button>
</body>
</html>

<?php
}else{
    header("Location: ../login/");
}
?>
