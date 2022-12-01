<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    NAME: <Input type="text" name="fname">
    <input type="submit">
</form>

<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is emty";
    } else {
        echo $name;
    }
   }   
   
   echo "Hello word!!";
?>


</body>
</html>