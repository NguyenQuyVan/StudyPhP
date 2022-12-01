<?php
    echo "Session in PHP <br>";

    session_start();
    if(isset($_POST['submit'])) {
        $email = filter_input(INPUT_POST, 'email',
            FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];
        if($email == 'tejimakouga@gmail.com'
            && $password == '123456'){
            $_SESSION['email'] = $email;
            header('Location: dashboard.php');     
        } else {
            echo "Incorrect email/password";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login to your account</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
    method = "POST"
    >
    <h3>Login </h3>
        <div>
            <label for="name">email:</label><br>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">password:</label><br>
            <input type="password" name="password">
        </div>
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>