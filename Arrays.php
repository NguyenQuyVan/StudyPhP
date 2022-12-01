<?php
    // $colors = [
    //     3 => 'red',
    //     4 => 'blue',
    //     5 => 'green'
    // ];
    // echo "<h1>$colors[5]</h1>";

    // $hex_colors = [
    //     'red' => '#FF0000',
    //     'green' => '#00FF00',
    //     'blue' => '0000FF'
    // ];
    // echo $hex_colors['green'];


    // $numbers = range(5,15);
    // print_r($numbers);

    // print_r($_GET);
    $email = htmlspecialchars($_POST['email']) ?? '';
    $password = htmlspecialchars($_POST['password']) ?? '';
    echo $email;
    echo $password;
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
    method = "POST"
    >
    <h3>Login </h3>
        <div>
            <label for="name">email:</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">password:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>