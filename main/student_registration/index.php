<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration - CMNHS</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="student-registration-custom.css">
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <form class="row     g-3 p-4 bg-white rounded"action="student_registration.php" method="post" enctype="multipart/form-data">
        <center><h1>Student Form    </h1>  </center>
        <div class="col-md-4">
                <label class="form-label"for="fnameField">First Name</label>
                <input class="form-control"type="text" name="fname" placeholder="First Name"required>
            </div>
            <div class="col-md-4">
                <label for="midnameField" class="form-label">Middle Name</label>
                <input class="form-control" type="text" name="midname" placeholder="Middle Name"required>
            </div>
            <div class="col-md-4">
                <label for="lnameField" class="form-label">Last name</label>
                <input class="form-control" type="text" name="lname" placeholder="Last Name" required>
            </div>
            <div class="col-md-5">
                <label for="lrnField" class="form-label">LRN</label>
                <input class="form-control"type="text" name="lrn" placeholder="LRN" required>
            </div>
            <div class="col-md-3">
                <label for="ageField" class="form-label">Age</label>
                <input class="form-control" type="number" name="age" placeholder="Age" min="0" max="100"required>
            </div>
            <div class="col-md-4">
                <label for="grdlvlField" class="form-label">Grade Level</label>
                <input class="form-control" type="number" name="grd_lvl" placeholder="Grade Level" required>
            </div>
            <div class="col-md-6">
                <label for="adviserField" class="form-label">Adviser</label>
                <input class="form-control"type="text" name="adviser" placeholder="Adviser" required>
            </div>
            <div class="col-md-2">
                <label for="sectionField" class="form-label">Section</label>
                <input class="form-control"type="text" name="section" placeholder="Section" required>
            </div>
            <div class="col-md-2">
                <label for="strandField" class="form-label">Strand</label>
                <input class="form-control" type="text" name="strand" placeholder="Strand" required>
            </div>
            <div class="col-md-2">
                <label for="genderField" class="form-label">Sex</label>
                <select class="form-select" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="studPfpField" class="form-label">Profile</label>
                <input class="form-control" type="file" name="stud-pfp" required >
            </div>
            <input type="hidden" name="form-submitted-student" value="1">
            <center>

                <input class="btn btn-primary" type="submit">
            </center>
        </form>
    </div>
    

</body>
</html>