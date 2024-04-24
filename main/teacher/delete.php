<?php 
    session_start();
    require_once("../db_conn.php");

    if(isset($_GET['student'])) {

        $studentToken = $_GET['student'];

        if(isset($_SESSION['teacherId'])) {
            $deleteStmt = $conn->prepare("DELETE FROM students WHERE token = :studentToken ");
            $deleteStmt->execute([
                ":studentToken"=>$studentToken,
            ]);

            if($deleteStmt->rowCount() > 0) {
                echo "Successfully deleted student";
            } else {
                echo "Failed deletion";
            }
        } else {
            echo "You are not authorized";
        }
    } else {
        echo "Invalid params";
    }


?>