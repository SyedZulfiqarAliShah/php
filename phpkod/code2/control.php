<html>
<body>
<h2 align = center > Control Structures in PHP</h2>
<?php
$a = rand(10 , 100);
$b = rand(10 , 100);
echo "Randomly generated numbers are: <br> \$a = $a <br> \$b = $b".'<br><br>';
if ($a > $b)
    echo '$a is greater. <br>';
else if ($b > $a)
    echo '$b is greater. <br>';
else
    echo 'Both are equal';

echo '<hr>';
//-----------------------------------------------------------
// counting how many times both random numbers were equal.
$c = 0; // counter
for($i = 1; $i < 10; $i++)
{
$x = rand(10 , 13);
$y = rand(10 , 13);
if ($x == $y)
    ++$c;

echo "<br> \$x = $x       \$y = $y ";

}
echo "<br><br> Number of times both were equal = $c";
//---------------------------------------------------------
// foreach demonstration
echo '<hr';
echo "<br> Foreach demonstration <br>";
$arr = array(11,22,33,44,55,66);
foreach($arr as $e)
      {
        echo ($e+1);
        echo str_repeat("&nbsp",10); // adds 10 spaces between values
      }
//--------------------------------------------------
// use of break and switch statements
echo '<hr>';
for($i = 2; $i<=10; $i+=2)
   for($j=10; $j>=6; $j-=2)
      {
        switch( $j + $i)
        {
          case 12:
                  echo "<br> 12 <br>";
                  break 1;
          case 18:
                  echo "<br> 18 <br>";
                  break;
          case 20:
                  echo "<br> 20 <br>";
                  break 2;

        }

      }
//-------------------------------------------------
echo '<hr>';
$testarr = array("zero" => 0 , "one" => 1 , "two" => 2);
var_dump($testarr);
foreach($testarr as $a => $v)
       echo '<br>'.'<br>'.$a." = ".$v; // printing array keys and values
//--------------------------------------------------------
echo '<hr>';
?>


</body>
</html>
