<?php
echo "this is very small project!!! <br>";



?>
<?php include 'components/header.php';
$name = $email = $body = '';
$name_error = $email_error = $body_error = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
        $name_error = 'Name is required!';
    } else {
        $name = htmlspecialchars($_POST['name']);
    }
    if (empty($_POST['email'])) {
        $email_error = 'email is required!';
    } else {
        $email = filter_input(
            INPUT_POST,
            'email',
            FILTER_SANITIZE_EMAIL
        );
    }
    if (empty($_POST['body'])) {
        $body_error = 'body is required!';
    } else {
        $body = filter_input(
            INPUT_POST,
            'body',
            FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
    }
    $validate_sucess = empty($name_error)
        && empty($email_error)
        && empty($body_error);
    if ($validate_sucess) {
        $sql = "INSERT INTO feedback(name, email, body)
                                        VALUES(?, ?, ?)";
        try {
            $statement = $connection->prepare($sql);
            $statement->bindParam(1, $name);
            $statement->bindParam(2, $email);
            $statement->bindParam(3, $body);
            $statement->execute();
            echo "<br> insert feedback succeessfully";
        } catch (PDOException $e) {
            echo "<br> cannot isert feedback into database!"
                .$e->getMessage();
        }
    }
    // echo $name_error;
    // echo $email_error;
    // echo $body_error;
}
?>
<h1>Enter your feedback here.</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">


    <div class="mb-3">
        <input type="text" class="form-control <?php echo $name_error ? 'is-invalid' : ''; ?>" name="name" placeholder="what is your name?">
        <p class="text-danger"><?php echo $name_error; ?></p>
    </div>
    <div class="mb-3">
        <input type="email" class="form-control <?php echo $email_error ? 'is-invalid' : ''; ?>" name="email" placeholder="what is your mail?">
        <p class="text-danger"><?php echo $email_error; ?></p>
    </div>
    <div class="mb-3">
        <textarea class="form-control <?php echo $body_error ? 'is-invalid' : ''; ?>" name="body" , placeholder="Enter your feedback" rows="2"></textarea>

    </div>
    <p class="text-danger"><?php echo $body_error; ?>
    </p>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" name="submit" value="Send">
    </div>
</form>
<?php include 'components/footer.php'; ?>