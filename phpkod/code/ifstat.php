<html>
<head>
</head>
<body>
<!--
-->
<?php
function test($num)
{
$val = $num%2;
if($val == 0 && $num != 0){
  echo "Given number is EVEN.";
  }
  elseif($num == 0){
        echo "ZERO number";
  }
      else {
            echo "Given number is ODD.";
  }
}

test(0);
echo "<br><br>";
test(10);
?>
</form>
</body>
</html>
