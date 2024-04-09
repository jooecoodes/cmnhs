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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="register.js"></script>
 <link rel="stylesheet" href="art1.css">
    <title>Document</title>
</head>
<body>
    <form id="registrationForm">
        <label for="teacherFname">First Name</label>
        <input type="text" name="teacherFname" id="teacherFname">
        <label for="teacherLname">Last Name</label>
        <input type="text" name="teacherLname" id="teacherLname">
        <label for="emailField">Email</label>
        <input type="text" name="email" id="emailField" placeholder="Enter Email">
        <label for="passwordField">Password</label>
        <input type="password" name="password" id="passwordField" placeholder="Enter Password">
        <input type="password" name="conf-pwd" id="confPwdField" placeholder="Confirm Password">
        <label for="sectionField">section</label>

        <?php 
        if($grade == 11) {
            switch($strand) {
                case "abm";
                    ?>
                        <!-- abm  -->
                        <select name="section" id="sectionField">
                            <option value="a">ABM-11-example</option>
                        </select>

                    <?php
                break;
                case "ict";
                    ?>
                        <!-- ict  -->
                        <select name="section" id="sectionField">
                            <option value="a">ICT-11-example</option>
                        </select>
                    <?php 
                break;
                case "humss";
                ?>
                    <!-- humss  -->
                    <select name="section" id="sectionField">
                        <option value="a">HUMSS-11-example</option>
                    </select>
                <?php 
                break;
                case "cookery";
                ?>
                    <!-- cookery  -->
                    <select name="section" id="sectionField">
                        <option value="a">COOKERY-11-example</option>
                    </select>
                <?php 
                break;
                case "eim";
                ?>
                    <!-- eim  -->
                    <select name="section" id="sectionField">
                        <option value="a">EIM-11-example</option>
                    </select>
                <?php 
            break;
                  

            }
        } else if ($grade == 12) {
            switch($strand) {
                case "abm";
                ?>
                    <!-- abm  -->
                    <select name="section" id="sectionField">
                        <option value="a">ABM-12-example</option>
                    </select>

                <?php
            break;
            case "ict";
                ?>
                    <!-- ict  -->
                    <select name="section" id="sectionField">
                        <option value="a">ICT-12-example</option>
                    </select>
                <?php 
            break;
            case "humss";
            ?>
                <!-- humss  -->
                <select name="section" id="sectionField">
                    <option value="a">HUMSS-12-example</option>
                </select>
            <?php 
            break;
            case "cookery";
            ?>
                <!-- cookery  -->
                <select name="section" id="sectionField">
                    <option value="a">COOKERY-12-example</option>
                </select>
            <?php 
            break;
            case "eim";
            ?>
                <!-- eim  -->
                <select name="section" id="sectionField">
                    <option value="a">EIM-11-example</option>
                </select>
            <?php 
        break;
            }
        }  

        
        ?>

        <label for="tokenField">Token</label>
        <input type="text" name="token" id="tokenField" placeholder="Enter Token">
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