<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<html>

<body>
    <?php
    $factorial = 1;

    for ($x = $_POST["num"]; $x >= 1; $x--) {
        $factorial = $factorial * $x;
    }

    echo "The factorial of " . $_POST["num"] . " is $factorial";

    ?>

</body>

</html>