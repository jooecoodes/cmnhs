<?php 
    require_once("../db_conn.php");
    session_start();
    if(isset($_POST['import-attendance'])) {
        $csvFile = $_FILES['csvFile']['tmp_name'];
        if (($handle = fopen($csvFile, 'r')) !== FALSE) {
            // Skip the header row
            fgetcsv($handle);

            
            $teacherFullName = $_SESSION['teacherFname'] . " " . $_SESSION['teacherLname'];
        $sqlDeleteAttendance = $conn->prepare("DELETE FROM attendance WHERE adviser = :teacherfullname");

        $sqlDeleteAttendance->execute([
            ':teacherfullname' => $teacherFullName
        ]);

        if(!$sqlDeleteAttendance->rowCount() > 0) {
            echo "Something wrong when clearing the attendance db";
        } 
           
    
            // Loop through each row in the CSV file
            while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                // Extract data from the CSV row
                // $id = $data[0];
                $fname = $data[1];
                $lname = $data[2];
                $grd_lvl = $data[3];
                $strand = $data[4];
                $section = $data[5];
                $adviser = $data[6];
                $gender = $data[7];
                $date = $data[8];
    
                // Prepare the SQL statement for insertion
                $sql = "INSERT INTO attendance(fname, lname, grd_lvl, strand, section, adviser, gender, date) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                // Bind parameters
                $stmt->execute([ $fname, $lname, $grd_lvl, $strand, $section, $adviser, $gender, $date]);
            }

            fclose($handle);
            echo "CSV file imported successfully.";
            header("Location: index.php");
        }
    
    }
?>