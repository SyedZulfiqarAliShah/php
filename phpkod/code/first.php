<html>
<head>
</head>
<body>

<?php
$name = "Zulfiqar shah";
$age = 41;
$height = 5.10;
$married = true;
echo("This is my first PHP file.");
echo "Testing variables";
echo "<br><br> <hr>";
echo "Mr. $name is $age years old. <br>";
echo strtolower($name);
echo "<br> <hr>";
echo strtoupper($name[0]);
echo "<br> <hr>";
echo str_replace("shah","Ali Shah",$name);
echo "<br> <hr>";
echo substr($name, 4);
echo "<br> <hr>";
echo substr($name, 4, 6);
echo "<br> <hr>";
echo 4+8;
echo "<br> <hr>";
?>

</body>
</html>
