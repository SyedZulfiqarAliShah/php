<html>
<body>
<h2>Accessing Globals in Local Scope </h2>

<?php
$a = 10;
$b = 20;
$c = 30;

echo "Before calling a function.<br> \$a = $a , \$b = $b , \$c = $c"."<br>";
echo "Sum = ".($a+$b+$c)."<br><hr>";

function chkglbl(){
  $a = 110;
  $b = 120;
  $c = 130;

  echo "<br>Inside the function, with same variable names.<br> \$a = $a , \$b = $b , \$c = $c <br>";
  echo "Sum = ".($a+$b+$c)."<br>";

echo "<br>Inside the function, accessing global variables.<br>";

echo "<br> Sum = ".( $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'] )."<hr>";
global $c;
       $c = 100;
echo "<br> After changing value of global c from inside function.";      
echo "<br> Sum = ".( $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'] );
}

chkglbl();


?>
</body>
</html>
