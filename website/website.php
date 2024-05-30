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
require ('database.php');
 echo "<br><br>$_POST[naam] is aangemaakt.<br><br> ";
 echo "Dit is je email: $_POST[email] ";

$band = $_POST['naam'];

 $sql = "INSERT INTO MyGuests (bandname) values ('$band')";
 if($conn->query($sql) === true) {
        echo "<br><br>updated<br><br>";
    }else{
        echo "<br><br>Error: <br><br>" . $conn->error;
    }

$result = $conn->query($sql);
if ($result){
    echo "<br>het is gelukt!<br>";
}else{
    echo "<br><br>het is niet gelukt!<br><br>";
}


?>
</body>
</html>