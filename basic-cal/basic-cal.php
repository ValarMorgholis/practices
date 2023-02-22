<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <?php
    $opr = "";
    $text1 = "";
    $text2 = "";
    $result = "";

    if (isset($_POST['op'])) {
        $text1 = $_POST['fText'];
        $text2 = $_POST['sText'];
        $opr = $_POST['op'];
        if ($opr == "+") {
            $result = $text1 + $text2;
        } elseif ($opr == "-") {
            $result = $text1 - $text2;
        } elseif ($opr == "*") {
            $result = $text1 * $text2;
        } elseif ($opr == "/") {
            $result = $text1 / $text2;
        }
    }
    ?>
    <form class="form" action="" method="post">



        <input name="fText" value="<?php echo $text1 ?>">

        <?php
        if ($opr == "+") {
            echo "+";
        } elseif ($opr == "-") {
            echo "-";
        } elseif ($opr == "*") {
            echo "*";
        } elseif ($opr == "/") {
            echo "/";
        }
        ?>

        <input name="sText" value="<?php echo $text2 ?>">
        <br><br>
        <input type="text" name="result" style="width: 350px" value="<?php echo $result ?>">
        <input type="submit" value='+' name="op">
        <input type="submit" value='-' name="op">
        <input type="submit" value='*' name="op">
        <input type="submit" value='/' name="op">




    </form>
</body>

</html>