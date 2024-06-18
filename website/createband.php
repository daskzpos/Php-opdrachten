<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>invulformulier</title>
</head>
<a>
 <method="post" action="http://localhost/php-opdrachten/website/createband.php"></method>   
 <a href="http://localhost/php-opdrachten/website/website.php">HOME</a>
<form>
    <p><strong>voeg hier een band toe</strong></p>
    <input type="text" name="naam">
    <br>
    <p><strong>selecteer hier de genre in</strong></p>
    <select naam="genre" id="genre" multiple>
      <option value="Rock">Rock</option>
      <option value="Pop">Pop</option>
      <option value="Jazz">Jazz</option>
      <option value="Hip-Hop">Hip-Hop</option>
    </select>
    <br>
      <input type="submit">
</form>


<?php
require ('conn database.php');
 echo "<br><br>$_POST[band] is toegevoegd.<br><br> ";
 echo "met de genre: $_POST[genre] ";

$band = $_POST['naam'];

 $sql = "INSERT INTO MyGuests (bandname) values ('$band')";
 if($conn->query($sql) === true) {
        echo "<br><br>updated<br><br>";
    }else{
        echo "<br><br>Error: <br><br>" . $conn->error;  
    }

// $result = $conn->query($sql);
// if ($result){
//     echo "<br>het is gelukt!<br>";
// }else{
//     echo "<br><br>het is niet gelukt!<br><br>";
// }

// while($row = $result->fetch_assoc()){
// echo "$row";
// }if ($result->num_rows>0){
//     echo "oops";
// }



?>



</body>
</html>