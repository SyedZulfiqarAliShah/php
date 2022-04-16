<html>
<head>
</head>
<body>

<?php
$list = array(11,22,33, 44,55);
echo "First array:  ";
for($i=0; $i < count($list); $i++)
echo $list[$i]." ,  ";

echo "<br><br>";
$list1 = array(3 => 11,22,33,44,55);
echo "Second array:  ";
print_r($list1);

$list2 = array(2,34,43,23,4,55,65,3 => 67, 2 => 87,89,1 => 90,98,44,22);
echo "<br><br>";
echo "Third array:  ";
for($i=0; $i < sizeof($list2); $i++)
echo $list2[$i]." ,  ";
 ?>

</body>
</html>
