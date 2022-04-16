<html>
<head>
</head>
<body>

<?php  ?>
<form action="catching.php" method="get" >
Color: <input type="text" name="color" >
<br><br>
Flower: <input type="text" name="flower" >
<br><br><br>

<input type="submit">
<br><br><br>
<?php
$col = $_GET["color"];
$flow = $_GET["flower"];

echo "Your favourite color is $col and flower is $flow.";
 ?>

<hr>

</form>
</body>
</html>
