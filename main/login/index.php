<?php 
    session_start();
    if(!isset($_SESSION['teacherId'])) {
        
        ?>
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="art.css">
    <script src="login.js"></script>
    <title>Document</title>
</head>
<body>
    
<div class="ad"> <form id="loginForm" class="form">
       <p class="form-title">Sign in to your account</p>
        <div class="input-container">
           <label for="emailField">Email</label>
        <input type="text" name="email" id="emailField" placeholder="Enter Email">
          <span>
          </span>
      </div>
      <div class="input-container">
      <label for="passwordField">Password</label>
        <input type="password" name="password" id="passwordField" placeholder="Enter Password">
        </div>
        <a href="../register/index.php">not register ?</a>
         <button type="submit" class="submit" value="submit" id="submitBttn">
        Sign in
      </button>
    </form>
   

    
   </form></div>

   

</body>
</html>
        <?php

    } else {
        echo "You're already login";
    }

?>
