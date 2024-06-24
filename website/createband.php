<?php
require ('conn database.php');
session_start();
?>

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
 <header>
  <a href="http://localhost/php-opdrachten/website/website.php">HOME</a>  
 </header>
 
<form>
    <p><strong>voeg hier een band toe</strong></p>
    <input type="text" name="band">
    <br>
    <p><strong>selecteer hier de genre</strong></p>
    <input type="radio" name="genre" id="rock" value="Rock">
      <label for="Rock">Rock</label>
      <br>
    <input type="radio" name="genre" id="pop" value="Pop">
      <label for="Pop">Pop</label>
      <br>
    <input type="radio" name="genre" id="jazz" value="Jazz">
      <label for="Jazz">Jazz</label>
      <br>
    <input type="radio" name="genre" id="hiphop" value="Hip-Hop">
      <label for="Hip-Hop">Hip-Hop</label>
      <br>
    </input>
    <br>
      <input type="submit">
</form>


<?php
 echo $_POST['band'];
 echo $_POST['genre'];

$band = $_POST['band'];

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

// while($row = $result->fetch_assoc()){
// echo "$row";
// }if ($result->num_rows>0){
//     echo "oops";
// }



?>



</body>
</html>