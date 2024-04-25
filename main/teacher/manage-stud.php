<?php 

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
    <script src="manage-stud.js"></script>
    <title>Document</title>
</head>
<body>
    <p>Fetch all your students</p>
    <button id="testBttn">Fetch</button>
    <table id="studTable">
        <thead id="studTableHead">
            <tr>
                <th>ID</th>
                <th>LRN</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Section</th>
                <th>Adviser</th>
            </tr>
        </thead>
        <tbody id="studTableBody">
            
        </tbody>
    </table>
</body>
</html>