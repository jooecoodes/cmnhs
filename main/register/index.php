<?php 

    if(!isset($_GET['strand'], $_GET['grade'])) {
        header("Location: strand-select.php");
    } else {

        echo $_GET['strand'];
        echo $_GET['grade'];
        $strand = htmlspecialchars($_GET['strand']);
        $grade = htmlspecialchars($_GET['grade']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
    <script src="register.js"></script>
 <link rel="stylesheet" href="art1.css">
    <title>Document</title>
</head>
<body>
    <form id="registrationForm" action="register.php" method="post">
        <label for="teacherFname">First Name</label>
        <input type="text" name="teacherFname" id="teacherFname" required>
        <label for="teacherLname">Last Name</label>
        <input type="text" name="teacherLname" id="teacherLname" required>
        <label for="emailField">Email</label>
        <input type="text" name="email" id="emailField" placeholder="Enter Email" required>
        <label for="passwordField">Password</label>
        <input type="password" name="password" id="passwordField" placeholder="Enter Password" required>
        <input type="password" name="confpwd" id="confPwdField" placeholder="Confirm Password"required>
        <label for="gradeField">Grade Level</label>
        <input type="text" name="grade" id="gradeField">
        <label for="strandField">Strand</label>
        <input type="text" name="strand" id="strandField" required>
        <label for="sectionField">Section</label>
        <input type="text" name="section" id="sectionField" required>
        <label for="tokenField">Token</label>
        <input type="text" name="token" id="tokenField" placeholder="Enter Token" required>
        <input type="submit" name="submit-btn" id="submitBtn" value="Submit">
        <button type="submit" name="submit-btn" id="submitBtn" value="Submit" onclick="backFunction()">back to login</button>
    </form>
    <script>
        function backFunction(){
            location.href="../login/index.php";
        }
    </script>

</body>
</html>

<?php 
    }

?>