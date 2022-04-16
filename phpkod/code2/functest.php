<html>
<body>
<h2>Integers </h2>
<?php
// demo of join() function
$arr = array("one", "two", "three");
echo join("+",$arr);
echo "<br><br>";

$arr2 = array( join(array(1,2,3)) , true, "word", join($arr) );
var_dump($arr2);
echo "<br><br>";
echo join(str_repeat("+",15),$arr2);
 
?>

</body>
</html>
