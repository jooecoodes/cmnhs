<?php 
    require_once("../db_conn.php");
    if(isset($_POST['form-submitted-student'])) {
        $studFname = htmlspecialchars($_POST['fname']);
        $studMname = htmlspecialchars($_POST['midname']);
        $studLname = htmlspecialchars($_POST['lname']);
        $studSection = htmlspecialchars(strtolower($_POST['section']));
        $studStrand = htmlspecialchars($_POST['strand']);
        $studAdviser = htmlspecialchars($_POST['adviser']);
        $studGender = htmlspecialchars($_POST['gender']);
        $studAge = htmlspecialchars($_POST['age']);
        $studToken = uniqid("",true);

        
        $uploadDirectory = "../../assets/profile/";
        if(isset($_FILES['stud-pfp'])){
            $studPfp = $_FILES['stud-pfp'];
        // Get the temporary file name
        $tmpFileName = $studPfp["tmp_name"];
        $img_ex = pathinfo($studPfp['name'], PATHINFO_EXTENSION);
        $img_ex_to_lc = strtolower($img_ex);

        $allowed_exs = array('jpg', 'jpeg', 'png');
        if (in_array($img_ex_to_lc, $allowed_exs)) {
            $new_img_name = uniqid($studLname, true) . '.' . $img_ex_to_lc;
            $img_upload_path = $uploadDirectory . $new_img_name;

            if (move_uploaded_file($tmpFileName, $img_upload_path)) {
                echo "File uploaded successfully. Stored at: $new_img_name";
            } else {
                echo "Error uploading file.";
            }

            dataInsertion($conn, $new_img_name, $studFname, $studMname, $studLname,  $studSection, $studStrand, $studGender, $studAdviser, $studAge, $studToken);


            
        }
    }else{
        echo "error".$_FILES['pfp']['error'];
    }

    }

    function dataInsertion($conn, $pfp, $fname, $mname, $lname, $section, $strand, $gender, $adviser, $age, $token)
{
    $stmtInsertion = $conn->prepare("INSERT INTO students(`profile`, fname, minitial, lname, section, strand, gender, adviser, age, token) VALUES(:pfp, :fname, :minitial, :lname, :section, :strand, :gender, :adviser, :age, :token)");
    $stmtInsertion->execute([
        ":pfp"=>$pfp,
        ":fname"=>$fname,
        ":minitial"=>$mname,
        ":lname"=>$lname,
        ":section"=>$section,
        ":strand"=>$strand,
        ":gender"=>$gender,
        ":adviser"=>$adviser,
        ":age"=>$age,
        ":token"=>$token
    ]);
    if($stmtInsertion->rowCount() > 0) {
        echo "Successfully inserted student";
    } else {
        echo "Failed to insert student";
    }


}


?>