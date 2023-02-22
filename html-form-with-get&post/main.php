<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
</head>

<body>

    <h1>Contact To Us</h1>

    <form action="submit-page.php" method="get">
        <label for="name" name="name"> <b>Please enter your name:</b> </label><input name="name" type="text">
        <br><br>
        <label for="last-name" name="last-name"> <b>Please enter your last name:</b> </label><input name="last-name" type="text">
        <br><br>
        <label for="msg" name="msg"> Please enter your massage and submit it <br> <br></label> <textarea name="text-msg" id="msg" cols="30" rows="10"></textarea>

        <input type="submit">

    </form>
</body>

</html>