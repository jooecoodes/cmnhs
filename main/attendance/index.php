<?php
ob_start(); // Start output buffering
require_once("../db_conn.php");
session_start();

if (isset($_SESSION['teacherId'])) {
    $firstName = isset($_SESSION['teacherFname']) ? $_SESSION['teacherFname'] : "teacher fname not set";
    $lastName = isset($_SESSION['teacherLname']) ? $_SESSION['teacherLname'] : "teacher lname not set";
    $fullName = $firstName . " " . $lastName;


    $sqlSelect = "SELECT * FROM attendance WHERE adviser = :adviserfullname";
    $stmt = $conn->prepare($sqlSelect);
    $stmt->execute([
        ":adviserfullname" => $fullName
    ]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($stmt->rowCount() > 0) {
        
    } else {

    }

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Attendance</title>
        <script src="jquery.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
        <script src="instascan.min.js"></script>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="../bootstrap.min.css">
        <script src="attendance.js"></script>
       
    </head>
    <body class="body-lay">
  
        <!-- <header class="header-lay">
            <section class="H-top">
                <a href="../homepage/index.php" class="logo">
                    
                </a>
                <section class="S-name">
                    <h3>CAMNHS</h3>
                </section>
                <section class="about">
                    <h4>About Us</h4>
                </section>
                <section class="out">
                    <a href="logout.php">
                        <h4>Log Out</h4>
                    </a>
                </section>
            </section>
            <section class="H-bot">
                <h2 class="attend">ATTENDANCE PAGE</h2>
            </section>
        </header>
     -->

        <main class="main-lay">
            <div class="container mt-3">
    <a href="../" class="btn btn-primary mt-3 mb-3 back"><-</a>

            </div>
            <section class="container form-container d-flex justify-content-evenly align-items-start h-15">

                <form id="attendanceForm">
                    <img src="" alt="" width="400px" height="400px" class="prof" id="pfpField">
                    <br><br>
                    <section class="attendform">
                        <section class="form-row">
                            <section class="form-label">
                                <label for="fnameField">First name: </label>
                            </section>
                            <section class="form-input form-group">
                                <input type="text" name="fname" class="underline-input form-control w-100" id="fnameField" >
                            </section>
                        </section>
                        <section class="form-row">
                            <section class="form-label">
                                <label for="lnameField">Last name: </label>
                            </section>
                            <section class="form-input form-group">
                                <input type="text" name="Lname" class="underline-input form-control w-100" id="lnameField">
                            </section>
                        </section>
                        <section class="form-row">
                            <section class="form-label">
                                <label for="grd_lvlField">Grade level: </label>
                            </section>
                            <section class="form-input">
                                <input type="text" name="grd_lvl" class="underline-input form-control w-100" id="grd_lvlField">
                            </section>
                        </section>
                        <section class="form-row">
                            <section class="form-label">
                                <label for="strandField">Strand: </label>
                            </section>
                            <section class="form-input">
                                <input type="text" name="strand" class="underline-input form-control w-100" id="strandField">
                            </section>
                        </section>
                        <section class="form-row">
                            <section class="form-label">
                                <label for="strandField">Section: </label>
                            </section>
                            <section class="sectionField">
                                <input type="text" name="section" class="underline-input form-control w-100" id="sectionField">
                            </section>
                        </section>
                        <section class="form-row">
                            <section class="form-label">
                                <label for="adviser">Adviser: </label>
                            </section>
                            <section class="adviserField">
                                <input type="text" name="adviser" class="underline-input form-control w-100" id="adviserField">
                            </section>
                        </section>
                        <section class="form-row">
                            <section class="form-label">
                                <label for="genderField">Gender: </label>
                            </section>
                            <section class="genderField">
                                <input type="text" name="gender" class="underline-input form-control w-100" id="genderField">
                            </section>
                        </section>
                        <input type="submit" value="Record" class="btn btn-primary mt-3 mb-3">
                    </section>
                  
                </form>
                <video id="preview"></video>
            </section>
            <div class="leftside">
                <!-- Import  -->
                <form action="import.php" method="post" enctype="multipart/form-data">
                    <label for="csvFile">Choose a CSV file:</label>
                    <input type="file" name="csvFile" id="csvFile" accept=".csv">
                    <button type="submit" name="submit" class="btn btn-primary">Import</button>
                    <input type="hidden" name="import-attendance" value="1">
                </form>

                <!-- <form action="" method="get" class="inputtt">
                    <section class="form-row">
                            <section class="form-label">
                                <label for="searchFnameField">First Name: </label>
                            </section>
                            <section class="searchFnameField">
                                <input type="text" name="search-fname" class="underline-input" id="searchFnameField">
                            </section>
                    </section>
                    <section class="form-row">
                            <section class="form-label">
                                <label for="searchLnameField">Last Name: </label>
                            </section>
                            <section class="searchLnameField">
                                <input type="text" name="search-lname" class="underline-input" id="searchLnameField">
                            </section>
                    </section>
                    <button type="submit" name="search">Search</button>

                </form> -->

                <table id="studTable" class="studdd table table-striped">
                    <thead id="studTableHead">
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Grade Level</th>
                            <th>Strand</th>
                            <th>Section</th>
                            <th>Adviser</th>
                            <th>Date</th>
                        </tr>
                    </thead>


                    <?php

                    // handle search
                    if (isset($_GET['search-fname'], $_GET['search-lname'])) {
                        if (isset($_POST['import-attendance'])) {
                            // Check if a file is selected
                            if (!empty($_FILES['csvFile']['name'])) {
                                $file = $_FILES['csvFile']['tmp_name'];

                                // Read the CSV file
                                if (($handle = fopen($file, "r")) !== FALSE) {

                                    while (($data = fgetcsv($handle)) !== FALSE) {
                                        echo "<tr>";
                                        foreach ($data as $value) {
                                            echo "<td>$value</td>";
                                        }
                                        echo "</tr>";
                                    }
                                    fclose($handle);
                                } else {
                                    echo "Error opening the CSV file.";
                                }
                            } else {
                                echo "Please choose a CSV file to upload.";
                            }
                            
                        } else {

                            $sqlSelectSearch = "SELECT * FROM attendance WHERE fname LIKE :fname AND lname LIKE :lname AND adviser=:teacherfullname";
                            $stmtSearch = $conn->prepare($sqlSelectSearch);
                            $stmtSearch->execute([
                                ":fname" => '%' . $_GET['search-fname'] . '%',
                                ":lname" => '%' . $_GET['search-lname'] . '%',
                                ":teacherfullname" => $fullName
                            ]);

                            $resultSearch = $stmtSearch->fetchAll(PDO::FETCH_ASSOC);

                            if ($stmtSearch->rowCount() > 0) {
                                echo "Successfully selected all attendance searched";
                            } else {
                                echo "No result";
                            }
                        }



                    ?>

                        <tbody id="studTableBody">

                            <?php foreach ($resultSearch as $resultFromSearch) : ?>
                                <tr>
                                    <td>
                                        <p><?= $resultFromSearch['fname'] ?></p>
                                    </td>
                                    <td>
                                        <p><?= $resultFromSearch['lname'] ?></p>
                                    </td>
                                    <td>
                                        <p><?= $resultFromSearch['gender'] ?></p>
                                    </td>
                                    <td>
                                        <p><?= $resultFromSearch['grd_lvl'] ?></p>
                                    </td>
                                    <td>
                                        <p><?= $resultFromSearch['strand'] ?></p>
                                    </td>
                                    <td>
                                        <p><?= $resultFromSearch['section'] ?></p>
                                    </td>

                                    <td>
                                        <p><?= $resultFromSearch['adviser'] ?></p>
                                    </td>
                                    <td>
                                        <p><?= $resultFromSearch['date'] ?></p>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>


                        <?php

                    } else {

                        if (isset($_POST['import-attendance'])) {
                            // Check if a file is selected
                            if (!empty($_FILES['csvFile']['name'])) {
                                $file = $_FILES['csvFile']['tmp_name'];

                                // Read the CSV file
                                if (($handle = fopen($file, "r")) !== FALSE) {

                                    while (($data = fgetcsv($handle)) !== FALSE) {
                                        echo "<tr>";
                                        foreach ($data as $value) {
                                            echo "<td>$value</td>";
                                        }
                                        echo "</tr>";
                                    }
                                    fclose($handle);
                                } else {
                                    echo "Error opening the CSV file.";
                                }
                            } else {
                                echo "Please choose a CSV file to upload.";
                            }
                        } else {

                        ?>

                            <tbody id="studTableBody">
                                <?php foreach ($results as $result) : ?>
                                    <tr>
                                        <td>
                                            <p><?= $result['id'] ?></p>
                                        </td>
                                        <td>
                                            <p><?= $result['fname'] ?></p>
                                        </td>
                                        <td>
                                            <p><?= $result['lname'] ?></p>
                                        </td>
                                        <td>
                                            <p><?= $result['gender'] ?></p>
                                        </td>
                                        <td>
                                            <p><?= $result['grd_lvl'] ?></p>
                                        </td>
                                        <td>
                                            <p><?= $result['strand']?></p>
                                        </td>
                                        <td>
                                            <p><?= $result['section'] ?></p>
                                        </td>

                                        <td>
                                            <p><?= $result['adviser'] ?></p>
                                        </td>
                                        <td>
                                            <p><?= $result['date'] ?></p>
                                        </td>
                                        <td>
                                        <form action="delete.php" method="post">
                                        <input type="hidden" name="student-attendance-id" value="<?= $result['id'] ?>">
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                        </td>
                                        
                                    </form>
                                    </tr>
                                    
                                <?php endforeach; ?>
                            </tbody>

                    <?php
                        }
                    }

                    ?>
                </table>
        
                <!-- Export  -->
               <div class="d-flex justify-content-evenly align-items-center">

                   <form action="export.php" method="POST">
                       <input type="hidden" name="export-attendance" value="1">
                       <input type="submit" value="Export Attendance" class="btn btn-primary">
                   </form>
   
   
                  
                       <!-- Clear  -->
                   <form action="clear.php" method="post">
                       <input type="hidden" name="clear-attendance" value="1">
                       <input type="submit" value="Clear" class="btn btn-danger">
                   </form>
               </div>
            </div>
       
        </main>  
        <footer class="footer-lay d-flex justify-content-center align-items-center ">
       
            <h4 class="C-footer">&copy; 2024 ICT-CSS 12. All rights reserved.</h4>
        </footer>   
                    
        <script src="../bootstrap.bundle.min.js"></script>
    </body>

    </html>
<?php
} else {
    header("Location: ../login/");
}

$teacherFname = (isset($_SESSION['teacherFname'])) ? $_SESSION['teacherFname'] : "teacher Fname not set";
$teacherLname = (isset($_SESSION['teacherLname'])) ? $_SESSION['teacherLname'] : "teacher lname not set";
 $teacherFullName = $teacherFname . ' ' . $teacherLname;
//  echo $teacherFullName;

ob_end_flush(); // Flush output buffer and send to the browser
?>