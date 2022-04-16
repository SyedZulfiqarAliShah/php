<html>
<head>
</head>
<body>

<?php
echo "<h2 align=center> Flipping an Array </h2>";

$list = array('a','b','c','d','e','f');
print_r($list);
echo "<br><br>";

while( list($key, $value) = each($list) ) {   // list() and each() are functions
  echo $key." => ".$value."<br><br>";
}

echo "<u><b>NOW FLIPPED</b></u>: flipping actually replaces keys with values<br><br>";
$flippedarray = array_flip($list);
print_r( $flippedarray );
echo "<br><br>";

while( list($key, $value) = each($flippedarray) ) {   // list() and each() are functions
  echo $key." => ".$value."<br><br>";
}



 ?>

</body>
</html>
