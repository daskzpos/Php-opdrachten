<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>invulformulier</title>
</head>
<body>
<method="post" action="http://localhost/php-opdrachten/website/login.php"></method>
<a href="http://localhost/php-opdrachten/website/website.php">HOME</a>
<br>
<br>
<form>
   <input type="text" name="login">
<br><br>
   <input type="password" name="pw">
<br><br>
   <input type="submit">
</form>


<?php
require ('conn database.php');

?>
</body>
</html>