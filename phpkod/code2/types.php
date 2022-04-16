<html>
<body>
<h2>PHP Data Types </h2>
<?php
$i = 10;
$s = "Pakistan";
$f = 9.876;
$b = true;
$n = null;

echo 'Type of i = '; echo gettype($i); echo '<br>';
echo 'Type of s = '; echo gettype($s); echo '<br>';
echo 'Type of f = '; echo gettype($f); echo '<br>';
echo 'Type of b = '; echo gettype($b); echo '<br>';
echo 'Type of n = '; echo gettype($n);
echo '<br><br>';
?>

<h3>Applying Casting </h3>

<?php
echo 'Type of i = '; echo gettype((float)$i); echo '<br>';
echo 'Type of s = '; echo gettype((int)$s); echo '<br>';
echo 'Type of f = '; echo gettype((int)$f); echo '<br>';
echo 'Type of b = '; echo gettype((int)$b); echo '<br>';
echo 'Type of n = '; echo gettype((int)$n);
?>
<h3>settype(p1, p2)   p1=variable  p2="target data type"</h3>
<?php
echo 'setting type: float to string = ';
echo settype($f,"string"); echo '<br>';
echo 'setting type: bool to float = ';
echo settype($b,"float"); echo '<br>';
echo 'setting type: int to object = ';
echo settype($i,"object"); echo '<br>';
echo 'setting type: null to string = ';
echo settype($n,"string"); echo '<br>';
echo 'setting type: string to object = ';
echo settype($n,"object"); echo '<br>';

?>
</body>
</html>
