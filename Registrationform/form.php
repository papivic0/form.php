<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="form.php" method="POST">
        <label for="">First Name</label>
        <input type="text" name="fname" placeholder="First Name"><br>
        <label for="">Last Name</label>
        <input type="text" name="lname" placeholder="Last Name"><br>
        <label for="">E-mail</label>
        <input type="text" name="email" placeholder="E-mail"><br>
        <label for="">Phone Number</label>
        <input type="number" name="number" placeholder="Phone number"><br>

        <button type="submit">Submit</button>
    </form>

    <?php 
        $a = $_POST["fname"];
        $b = $_POST["email"];
        $c = $_POST["number"];

        echo "Hello " . $a . "<br>";
        echo "Your E-mail address is " . $b . "<br>";
        echo "Your phone number is " . $c;
    ?>

</body>
</html>