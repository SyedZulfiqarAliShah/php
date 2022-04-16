<html>
<body>
<h2>Variable-Length Arguments Passing into Functions </h2>
<?php

function sum(...$nums)
{
  $temp = 0;
  foreach( $nums as $n )
        $temp = $temp + $n;
  return $temp;
}

echo "Sum of 1,2,3,4,5 = ".sum(1,2,3,4,5);
echo "<br> Sum of 11,22,33 = ".sum(11,22,33);
echo "<br> -------------------------------------------------<br>";

echo "Sum of an array with variable elements = ".sum(...[1,2,3,4]);
echo "<br> -------------------------------------------------<br>";

$arr = [11,22,33,44];
echo "Sum of an array stored in a variable = ".sum(...$arr);
echo "<br> =======================================================================<br>";



echo "<h3> Passing By Reference </h3>";

function pbr( &$vr )
{
     $vr .= ", this is additional part.";
     return $vr;
}

$str = "Passed String";
echo pbr( $str);

echo "<br> -------------------------------------------------<br>";

function varpbr(&...$vr)
{
     foreach( $vr as $k => &$v )
             $v .= "Additionally added word";
}

$a = "Test";
$b = "Test2";
$c = "Test3";

echo "<br> Words before Passing <br>"." $a $b $c "."<br>";
varpbr( $a, $b, $c );
echo "<br> Words After Passing <br>"." $a <br> $b <br> $c "."<br>";
echo "<br> -------------------------------------------------<br>";
echo "<h3> Returning Reference from a Function </h3>";
function &retref()
{
    $local = 10;
    return $local;
}

$test = &retref();

echo "Square = ".$test * $test;

echo "<br> -------------------------------------------------<br>";
echo "<h3> Returning ARRAY of arrays from a Function </h3>";

function retarr()
{
     $lst = array( "one"=>1, "two"=>2, "three"=>3 );
     $lst2 = [1,2,3,4,5];
     $lst3 = array( 10=>"Ten", 5=>"Five", 2=>"Two", 20=>"Twenty", 5=>"FiveAgain" );
     // Note the last element of index 5 will overwrite the first element at index 5.

     return array( $lst, $lst2, $lst3 );
}

$catcharr = retarr();
foreach( $catcharr as $k => $v )
        { 
             $temp = $v;
             echo "Array No- ".((int)($k)+1);
             foreach( $temp as $kk => $vv )
                    echo "<br> Array element[$kk] = $vv";
             echo "<br><br>";       
        }

?>
</body>
</html>
