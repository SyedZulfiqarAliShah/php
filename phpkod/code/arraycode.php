<html>
<head>
</head>
<body>
<!--
-->
<?php
$list = [11,22,33,44,55,66,77,88,99,1000];
$second = array(9,8,7,6,5,4,3,2,1);
$test = array();    // empty array for output

for($i=0; $i< count($list); $i++)
  echo " $list[$i] <br>";

echo "<br><br>";

for($j=0; $j< count($second); $j++)
  echo " $second[$j] <br>";

echo "<br><br>";

for($x=0; $x<count($list);$x++)
    {$test[$x] = $list[$x] + $second[$x];
      echo "$test[$x] <br>";
    }

?>



</form>
</body>
</html>
