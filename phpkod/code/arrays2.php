<html>
<head>
</head>
<body>

<?php
$week = array("a" => "Monday", "b" => "Tuesday", "c" => "Wednesday", "d" => "Thursday", "e" => "Friday");
echo "Printing array with keys. <br><br>";
print_r($week);  // printing array elements
echo "<br><br><hr><br>";

echo "Printing array values with iteration-loop. <br><br>";

while( list($key, $val) = each($week) ) {   // list() and each() are functions
  echo $key." => ".$week[$key]."<br><br>";
}
echo "<hr>";

reset($week);
echo "<br>"."Current value of array is : ".current($week)."<br>";
echo "<br>"."Next value of array is : ".next($week)."<br>";
echo "<br>"."Next value of array is : ".next($week)."<br>";
echo "<br>"."Next value of array is : ".next($week)."<br>";
echo "<br>"."Current Key of array is : ".key($week)."<br>";
reset($week);
echo "<br>"."AFTER RESET, Current Key of array is : ".key($week)."<br>";
echo "<br>"."End of array is : ".end($week)."<br>";

 ?>

</body>
</html>
