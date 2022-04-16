<html>
<head>
</head>
<body>

<?php
echo "<h2 align=center> Shuffling an Array </h2>";

$list = range(1 , 50);

while( list( , $value) = each($list) ) {   // list() and each() are functions
  echo $value." ";
}

echo "<br><br>"."<u><b>NOW SHUFFLED</b></u>: <br><br>";

shuffle($list); // source array is shuffled.

while( list( , $value) = each($list) ) {   // list() and each() are functions
  echo $value." ";
}
 ?>

</body>
</html>
