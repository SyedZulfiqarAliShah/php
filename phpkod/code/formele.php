<html>
<head>
</head>
<body>
<form action = "formele.php" method="post">
Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
Grapes: <input type="checkbox" name="fruits[]" value="Grapes"> <br>
Banana: <input type="checkbox" name="fruits[]" value="Banana"> <br>
Mango: <input type="checkbox" name="fruits[]" value="Mango"> <br>
Melon: <input type="checkbox" name="fruits[]" value="Melon"> <br>
Peach: <input type="checkbox" name="fruits[]" value="Peach"> <br>
Pineapple: <input type="checkbox" name="fruits[]" value="Pineapple"> <br>
Straberry: <input type="checkbox" name="fruits[]" value="Straberry"> <br>

<input type="submit">



<?php
$favourite = "";

$frts = $_POST["fruits"];
for($i=0; $i < count($frts); $i++)
     if($frts[$i] == true )
        $favourite.= $frts[$i]." ";

echo "<br><br>"." Your favourite fruits include ".$favourite;
 ?>


</body>
</html>
