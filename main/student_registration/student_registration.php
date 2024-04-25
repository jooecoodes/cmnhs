<?php 
    require_once("../db_conn.php");
    print_r($_POST);
    if(isset($_POST['form-submitted-student'])) {
        echo "I went in";
        $studFname = htmlspecialchars($_POST['fname']);
        $studMname = htmlspecialchars($_POST['midname']);
        $studLname = htmlspecialchars($_POST['lname']);
        $studLRN = htmlspecialchars($_POST['lrn']);
        $studSection = htmlspecialchars(strtolower($_POST['section']));
        $studStrand = htmlspecialchars(strtolower($_POST['strand']));
        $studAdviser = htmlspecialchars($_POST['adviser']);
        $studGender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : "gender is not filled";
        $studAge = htmlspecialchars($_POST['age']);
        $studGrdLvl = htmlspecialchars($_POST['grd_lvl']);
        $studToken = uniqid("",true);
        if(userExist($conn, $studFname, $studMname, $studLname)) {
            echo "Student already exists";
        } else {
            echo "I went in 2";
            $uploadDirectory = "../../assets/profile/";
            if(isset($_FILES['stud-pfp'])){
                echo "I went in 3";
                $studPfp = $_FILES['stud-pfp'];
            // Get the temporary file name
            $tmpFileName = $studPfp["tmp_name"];
            $img_ex = pathinfo($studPfp['name'], PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);
    
            $allowed_exs = array('jpg', 'jpeg', 'png');
            if (in_array($img_ex_to_lc, $allowed_exs)) {
                echo "I went in 4";
                $new_img_name = uniqid($studLname, true) . '.' . $img_ex_to_lc;
                $img_upload_path = $uploadDirectory . $new_img_name;
    
                if (move_uploaded_file($tmpFileName, $img_upload_path)) {
                    echo "File uploaded successfully. Stored at: $new_img_name";

                } else {
                    echo "Error uploading file.";
                }
    
                dataInsertion($conn, $new_img_name, $studFname, $studMname, $studLname, $studLRN, $studSection, $studStrand, $studGender, $studAdviser, $studAge, $studToken, $studGrdLvl);
    
    
                
            } else {
                echo "File not supported";
            }
        }else{
            echo "error".$_FILES['pfp']['error'];
        }
    
        }
        
 
    }

    function dataInsertion($conn, $pfp, $fname, $mname, $lname, $lrn, $section, $strand, $gender, $adviser, $age, $token, $grdlvl)
{
    $stmtInsertion = $conn->prepare("INSERT INTO students(`profile`, fname, minitial, lname, LRN, section, strand, gender, adviser, age, token, grd_lvl) VALUES(:pfp, :fname, :minitial, :lname, :LRN, :section, :strand, :gender, :adviser, :age, :token, :grdlvl)");
    $stmtInsertion->execute([
        ":pfp"=>$pfp,
        ":fname"=>$fname,
        ":minitial"=>$mname,
        ":lname"=>$lname,
        ":LRN"=>$lrn,   
        ":section"=>$section,
        ":strand"=>$strand,
        ":gender"=>$gender,
        ":adviser"=>$adviser,
        ":age"=>$age,
        ":token"=>$token,
        ":grdlvl"=>$grdlvl
    ]);
    if($stmtInsertion->rowCount() > 0) {
        echo "Successfully inserted student";
    } else {
        echo "Failed to insert student";
    }


}

    function userExist($conn, $fname, $mname, $lname) {
        $stmtSelection = $conn->prepare("SELECT * FROM students WHERE fname = :fname AND minitial = :minitial AND lname = :lname");
        $stmtSelection->execute([
            ":fname"=>$fname,
            ":minitial"=>$mname,
            ":lname"=>$lname
        ]);
        $results = $stmtSelection->fetchAll(PDO::FETCH_ASSOC);
        if($stmtSelection->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
        
    }


?>