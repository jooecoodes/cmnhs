<?php 
    session_start();
    if(!isset($_SESSION['teacherId'])) {
        
        ?>
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>ZS -->
    <script src="login.js"></script>
    <link rel="stylesheet" href="1.css">
    <title>Document</title>
</head>
<body>
    <form id="loginForm">
        <label for="emailField">Email</label>
        <input type="text" name="email" id="emailField" placeholder="Enter Email">
        <label for="passwordField">Password</label>
        <input type="password" name="password" id="passwordField" placeholder="Enter Password">
        <input type="submit" name="submit-btn" value="Submit" id="submitBttn">
    </form>
    <a href="../register">register</a>
</body>
</html>
        <?php

    } else {
        header("Location: ../");
    }

?>
