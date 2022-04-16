<html>
<head>
</head>
<body>

<?php
echo "<h2 align=center> Reversing an Array </h2>";

$list = range(1 , 50);

while( list( , $value) = each($list) ) {   // list() and each() are functions
  echo $value." ";
}

echo "<br><br>"."<u><b>NOW REVERSED</b></u>: <br><br>";
$revarray = array_reverse($list);

while( list( , $value) = each($revarray) ) {   // list() and each() are functions
  echo $value." ";
}



 ?>

</body>
</html>
