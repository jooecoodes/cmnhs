<?php 
    require_once("../db_conn.php");
    
    if(isset($_POST['student-attendance-id'])) {
        $sqlDeleteStudentAttendance = $conn->prepare("DELETE FROM attendance WHERE id = :studentid");
        $sqlDeleteStudentAttendance->execute([
            ':studentid' => $_POST['student-attendance-id']
        ]);

        if($sqlDeleteStudentAttendance->rowCount() > 0) {
            echo "<script>Successfully deleted student from attendance </script>";
        } else {
            echo "<script>Failed to delete student</script>";
        }
    }


?>