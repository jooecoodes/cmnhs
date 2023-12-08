<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="register.js"></script>
    <title>Document</title>
</head>
<body>
    <form id="registrationForm">
        <label for="emailField">Email</label>
        <input type="text" name="email" id="emailField" placeholder="Enter Email">
        <label for="passwordField">Password</label>
        <input type="password" name="password" id="passwordField" placeholder="Enter Password">
        <input type="password" name="conf-pwd" id="confPwdField" placeholder="Confirm Password">
        <label for="strandField">Strand</label>
        <input type="text" name="strand" id="strandField" placeholder="Enter Strand">
        <label for="tokenField">Token</label>
        <input type="text" name="token" id="tokenField" placeholder="Enter Token">
        <input type="submit" name="submit-btn" id="submitBtn" value="Submit">
    </form>
</body>
</html>