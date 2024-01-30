<?php 
    require_once("../db_conn.php");
    session_start();
    var_dump($_POST);
    if(isset($_POST['clear-attendance'])) {
        $teacherFullName = $_SESSION['teacherFname'] . " " . $_SESSION['teacherLname'];
        $sqlDeleteAttendance = $conn->prepare("DELETE FROM attendance WHERE adviser = :teacherfullname");

        $sqlDeleteAttendance->execute([
            ':teacherfullname' => $teacherFullName
        ]);

        if($sqlDeleteAttendance->rowCount() > 0) {
            echo "<script>Successfully Deleted Attendance</script>";
        } else {
            echo "<script>Failed to delete attendance</script>";
        }
    }
?>