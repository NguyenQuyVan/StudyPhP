<?php
    session_start();
    if(isset($_SESSION['email'])) {
        echo "welcome to dashboard page <br>";
        echo "email: " . $_SESSION['email'];
        echo "<a href='/logout.php'>Logout</a>";
    } else {
        echo "welcome guest to dashboard!!";
        echo "<a href='/session.php'>back to login</a>";
    }   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page1</title>
</head>
<body>
    <H1>this is dashboard</H1>
</body>
</html>