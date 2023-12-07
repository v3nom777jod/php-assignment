<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body bg color="grey">
    <h1>Register Page</h1>
    <form action="database.php" method="POST">
    <label>Enter name here:*</lable>    
    <input type="text" name="d1" required><br><hr>
    <label>Enter Email here:*<label>
    <input type="email" name="d2" required><br><hr>
    <label>Enter Password:*<label>
    <input type="password" name="d3" required><br><hr>
    <label>Enter phone number here:*<label>
    <input type="num" name="d4" required><br><hr>
    <input type="submit" name="op" value="REGISTER"><br><hr>

</form>
<form action="Registration.php" method="POST">
    <p style="color:olive"><label>GO BACK TO LOGIN PAGE:</label>
    <input type="submit" name="mn" value="REGISTER"></p>
</form>
<?php


?>

</body>
</html>








</body>
</html>