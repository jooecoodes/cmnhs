<?php
require_once('../db_conn.php');
require_once('../../phpqrcode/qrlib.php');
session_start();
if (isset($_GET['user'])) {
    $userToken = $_GET['user'];

    if (isset($_SESSION['teacherId'])) {
        include("../teacher_session.php");
        $stmt = $conn->prepare("SELECT sem1_subjects, sem2_subjects FROM teachers WHERE id=:teacherid");
        $stmt->execute([
            ':teacherid' => $teacherId
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $teacherSubjectsSem1Array = explode(",", $result['sem1_subjects']);
        $teacherSubjectsSem2Array = explode(",", $result['sem2_subjects']);

        $stmt = $conn->prepare("SELECT * FROM students WHERE adviser = :teacherfullname AND section = :teachersection AND token = :usertoken");
        $stmt->execute([
            ":teacherfullname" =>  $teacherFullName,
            ":teachersection" => $teacherSection,
            ":usertoken" => $userToken,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            //setup sessions
            $studFname = $result['fname'];
            $studMname = $result['minitial'];
            $studLname = $result['lname'];
            $studId = $result['id'];
            $studSection = $result['section'];
            $studStrand = $teacherStrand;
            $studGrdlvl = $teacherGrdlvl;
            $studToken = $result['token'];
            $studPfp = $result['profile'];
            $studLrn = $result['LRN'];
            $studAdviser = $result['adviser'];
            $studFullName = $studFname . "_" . $studLname;
            // $studGradesSem1 = $result['sem1_grades'];
            // $studGradesSem2 = $result['sem2_grades'];
            // $studGradesSem1Array = (empty($studGradesSem1)) ? "no grade" : explode(",", $studGradesSem1);
            // $studGradesSem2Array = (empty($studGradesSem2)) ? "no grade" : explode(",", $studGradesSem2);
            $profilePath = (empty($studPfp)) ? "../../assets/profile/default.png" : "../../assets/profile/$studPfp";

            // Define the text to be encoded
            $token = $studToken;

            // Generate the QR code image and save it to a file
            QRcode::png($token, "../../assets/qr/$studFullName.png");
            ?>
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <link rel="stylesheet" href="../bootstrap.min.css">
                            <link rel="stylesheet" href="student-custom.css">
                            <title>Student - CMNHS</title> 

                        </head>
                        <body>
                        <div height="100vh" class="container form-container d-flex justify-content-center overflow-auto">
                            <form enctype="multipart/form-data" action="qr_handler.php" method="POST" class="form bg-white p-4 rounded">
                            <div class="form-square">
                            <input type="hidden" name="token" value="<?php echo $studToken ?>">
                            <div class="d-flex justify-content-center align-items-center flex-column">

                            <label class="form-label"for="pfp">Profile:</label>
                            
                            <input class="form-control" type="file" id="pfp" name="pfp"><br>
                            <img width="300px" height="300px"src="<?php echo $profilePath ?>" alt="">
                        </div>
                            <div class="d-flex justify-content-center align-items-center flex-column">

                                <img src="<?php echo "../../assets/qr/$studFullName.png" ?>" alt="" width="50%" height="50%"><br>
                                <a href="download_qr.php?studfullname=<?= $studFullName ?>" class="btn btn-primary mt-3 mb-3">Download QR Code</a>
                            </div>

                            <label for="gradeLvl">Grade level:<?php echo $studGrdlvl ?></label><br>
            
                            <label for="section">Section:<?php echo $studSection ?></label><br>
              
                            <label for="strand">Strand:<?php echo $studStrand ?></label><br>

                            <label for="adviser">Adviser:<?php echo $studAdviser ?></label><br>
                            <label for="id">ID:<?php echo $studId ?></label><br>
                            <label for="lrn">LRN:</label>
                            <input type="text" id="lrn" name="LRN" value="<?php echo $studLrn ?>" class="form-control w-100"><br>
                            <label for="fname">First Name:</label>
                            <input type="text" id="fname" name="fname" value="<?php echo $studFname ?> " class="form-control w-100"><br>
                            <label for="fname">Middle Name:</label>
                            <input type="text" id="fname" name="mname" value="<?php echo $studMname ?> " class="form-control w-100" ><br>
                            <label for="lname">Last Name:</label>
                            <input type="text" id="lname" name="lname" value="<?php echo $studLname ?>" class="form-control w-100"><br>
                            <div class="d-flex justify-content-center mt-3 mb-3">
                                
                                <input type="submit" name="submit" value="Update" class="btn btn-primary">
                            </div>
                        </div>
                            </form>
                    </div>
                        <?php
        } else {
            echo "Fetching Failed or this may not be your student";
        }
    } else {
        echo "Your not a teacher or login";
    }

} else {
    echo "Failed to get user";
}


?> 
