<?php
session_start();
require ('conn database.php');

?>

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
<header>
   <a href="http://localhost/php-opdrachten/website/website.php">HOME</a>
</header>
<br>
<br>
<h1>LOGIN</h1>
<form>
   <p>username</p>
   <input type="text" name="login">
<br><br>
   <p>password</p>
   <input type="password" name="pw">
<br><br>
   <input type="submit">
</form>


<?php

?>
</body>
</html>