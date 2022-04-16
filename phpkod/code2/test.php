<html>
<body>
<?php
echo  "Just Playing with code <br>";
$b = 55;
$f = 9.9e-321;
$boool = true;
$dbl =34.54;
$nm = "Pakistan";
$n = null;

echo "<br> Value of \$b = ".$b;
echo " and type of $b = ".gettype($b);

echo "<br><br> Value of \$f = ".$f;
echo " and type of $f = ".gettype($f);

echo "<br><br> Value of \$dbl = ".$dbl;
echo " and type of $dbl = ".gettype($dbl);

echo "<br><br> Value of \$boool = ".$boool;
echo " and type of $boool = ".gettype($boool);

echo "<br><br> Value of \$nm = ".$nm;
echo " and type of $nm = ".gettype($nm);

echo "<br><br> Value of \$n = ".$n;
echo " and type of $n = ".gettype($n);
print '<br>--------------------------------------<br>';
echo settype( $dbl, "string" );
echo "<br>".$dbl;
echo "<br>type of $dbl is changed to  = ".gettype($dbl);
?>

</body>
</html>
