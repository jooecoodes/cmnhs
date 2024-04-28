<?php 

    

      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
    <script src="register.js"></script>
    <link rel="stylesheet" href="../bootstrap.min.css">
 <link rel="stylesheet" href="register-custom.css">
    <title>Document</title>
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">

        <form class="row g-3 bg-white rounded p-4"id="registrationForm" action="register.php" method="post">
            <center>

                <h1>Teacher Form</h1>
            </center>
            <div class="col-md-6">
                <label class="form-label" for="teacherFname">First Name</label>
                <input class="form-control" type="text" name="teacherFname" id="teacherFname" required>
            </div>
            <div class="col-md-6">
                <label class="form-label"for="teacherLname">Last Name</label>
                <input class="form-control" type="text" name="teacherLname" id="teacherLname" required>
            </div>
            <div class="col-md-12">
                <label class="form-label" for="emailField">Email</label>
                <input class="form-control" type="text" name="email" id="emailField"  required>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="passwordField">Password</label>
                <input class="form-control" type="password" name="password" id="passwordField"  required>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="confPwdField">Confirm Password</label>
                <input class="form-control" type="password" name="confpwd" id="confPwdField" required>
            </div>
            <div class="col-md-4">
                <label class="form-label" for="gradeField">Grade Level</label>
                <input class="form-control" type="text" name="grade" id="gradeField">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="strandField">Strand</label>
                <input class="form-control" type="text" name="strand" id="strandField" required>
            </div>
            <div class="col-md-4">
                <label class="form-label" for="sectionField">Section</label>
                <input class="form-control" type="text" name="section" id="sectionField" required>
            </div>
            <div class="col-md-12">
                <label class="form-label" for="tokenField">Token</label>
                <input class="form-control" type="text" name="token" id="tokenField" required>
            </div>
            <div class="d-flex  align-items-center">
                <div class="col-md-3"> 
                    <input class="btn btn-primary"type="submit" name="submit-btn" id="submitBtn" value="Submit">
                </div>
                <div class="col-md-3">
                    <button class="btn btn-warning" type="submit" name="submit-btn" id="submitBtn" value="Submit" onclick="backFunction()">Log In</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        function backFunction(){
            location.href="../login/index.php";
        }
    </script>

</body>
</html>

