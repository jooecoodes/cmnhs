<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="student_registration.php" method="post" enctype="multipart/form-data">
        <input type="text" name="fname" placeholder="First Name"required>
        <input type="text" name="midname" placeholder="Middle Name"required>
        <input type="text" name="lname" placeholder="Last Name" required>
        <input type="text" name="lrn" placeholder="LRN" required>
        <input type="number" name="age" placeholder="Age" min="0" max="100"required>
        <input type="number" name="grd_lvl" placeholder="Grade Level" required>
        <input type="text" name="adviser" placeholder="Adviser" required>
        <input type="text" name="section" placeholder="Section" required>
        
        <select name="strand" required>
            <option value="ict">ICT</option>
            <option value="abm">ABM</option>
            <option value="humss">HUMSS</option>
            <option value="eim">EIM</option>
            <option value="he">HE</option>
        </select>
        <select name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <input type="file" name="stud-pfp" required>
        <input type="hidden" name="form-submitted-student" value="1">
        <input type="submit">
    </form>
    

</body>
</html>