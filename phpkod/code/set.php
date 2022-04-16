<html>
<head>
</head>
<body>

<?php

echo "This is the name of scripting file on this SERVER =   ";
 echo $_SERVER['SCRIPT_NAME'];
 echo "<br><br><hr> <h2>Important functions</h2><br><br>";

$a = 10;
$yes = false;
$x = "";
$y = null;
$z;

echo 'isset($a) = '.isset($a)."<br><br>";

echo 'isset($yes) = '.isset($yes)."<br><br>";

echo 'isset($z) = '.isset($z)."<br><br>";

echo 'is_null($z) = '.is_null($z)."<br><br>";

echo 'empty($z) = '.empty($z)."<br><br>";

echo 'isset($x) = '.isset($x)."<br><br>";

echo 'empty($x) = '.empty($x)."<br><br>";

echo 'isset($y) = '.isset($y)."<br><br>";

echo 'is_null($y) = '.is_null($y)."<br><br><br>";

echo 'After unsetting $yes'."<br><br>";

unset($yes);
echo 'isset($yes) = '.isset($yes)."<br><br>";
echo 'empty($yes) = '.empty($yes)."<br><br>";
echo 'is_null($yes) = '.is_null($yes)."<br><br>";
 ?>

</body>
</html>
