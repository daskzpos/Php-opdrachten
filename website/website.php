<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <title>invulformulier</title>
</head>
<body>
<form method="post" action="http://localhost/php-opdrachten/website/website.php">
    <p><strong>vul hier je naam in</strong></p>
    <input type="text" name="naam">
    <p><strong>vul hier je email in</strong></p>
    <input type="text" name="email"><br><br>
    <button type="submit">verzenden</button>
</form>
<?php
 echo "$_POST[naam] is aangemaakt.<br> ";
 echo "Dit is de email die van jou is: $_POST[email] ";
 if ($_POST['naam'] == "danique") {
    echo "<br><br>rood harige <br><br>";
    echo("welkom rood harige meisje. als je dit leest ben je een sukkel. kut kind dat je bent.");
 }

?>
</body>
</html>