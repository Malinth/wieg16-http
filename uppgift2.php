<?php
$x = $_POST["firstname"];
echo "<p> Användarnamn: '$x' </p>";
$x = $_POST["lastname"];
echo "<p> Efternamn: '$x' </p>";
?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>



<form action="uppgift2.php" method="post">
First name:<br>
<input type="text" name="firstname" value=""><br>
Last name:<br>
<input type="text" name="lastname" value=""><br><br>
<input type="submit" value="Submit">
</form>

</html>
</body>