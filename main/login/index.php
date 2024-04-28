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
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="login-custom.css">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex min-vh-100 justify-content-center align-items-center">

        <form class="row g-1 bg-white rounded p-4"id="loginForm">

                <div class="mb-3">
        
                    <label for="emailField" class="form-label">Email</label>
        
                    <input class="form-control" type="text" name="email" id="emailField" placeholder="Enter Email">
                </div>
               
                <div class="mb-3">
        
                    <label for="passwordField" class="form-label">Password</label>
                    <input class="form-control"type="password" name="password" id="passwordField" placeholder="Enter Password">
                </div>
                <div class="form-group d-flex justify-content-evenly">
                                <input class="btn btn-primary" type="submit" name="submit-btn" value="Submit" id="submitBttn">
                                <a href="../register" class="btn btn-warning">Register</a>
                </div>
            
        </form>
        
    </div>
</body>
</html>
        <?php

    } else {
        header("Location: ../");
    }

?>
