<html>
<head>
</head>
<body>
<h2>Practice File 3</h2>
<?php
$arr = array(
             'one' => 100,
             8.99 => 200,     // overwritten first by line 14 then by line 16, float to int cast done on key
             "9" => 300,      // overwritten by line 13 , string to int cast done on key (NOTE: 09 will not be overwritten as it is not integer string)
             null => 400,
             '0x1f' => 500,
             0b1001 => 600,   // converted to decimal 9 and overwrote third element
             "8" => 700,      // string to int cast done on key which overwrote second element (08 would have not overwritten)
             800,             // its key will be 1 more than largest previous key
             8.0 => 1000,     // it will overwrite 700
             "8.0" => 1100,   // it will overwrite 1000 because key is not int string//overwriting means NO increase in array size
             ''  =>  1200,     // it will overwrite 400 at line 11
             013 => 1300
);
//echo hexdec('0x1p');
//echo "<br>";
var_dump( $arr );           echo "<br><br>";
var_export($arr);           print '<br><br>';
// unsetting array elements and deleting Array
unset( $arr['one'] );
var_dump($arr);             print '<br><br>';
unset( $arr[null] , $arr[8] , $arr[8.0] );               // deletes more than 1 elements
var_dump($arr);             print '<br><br>';
//unset( $arr );                               // deleting whole array
//var_dump($arr);             print '<br><br>';   // array is deleted

$arr_new = &$arr;     // both idetifiers refer to the same array
 print_r ($arr_new);

echo "<br>------------------------------------------------------------------------------------------<br>";
function getArr(){
  return array(1, array(2, array("complexity" => 1111 , 8 => 9 ), 44), 33);
}

var_export( getArr()[0] );                    print '<br>';
var_export( getArr()[1][0] );                 print '<br>';
var_export( getArr()[1][1] );                 print '<br>';
var_export( getArr()[1][1]['complexity'] );   print '<br><br>';

echo getArr()[0] + getArr()[1][0] + getArr()[2] + getArr()[1][2]  + getArr()[1][1]['complexity'] + getArr()[1][1][8];
print '<br><br>';
$newGA = (getArr()[1][1][] = 10);   // trying to add an element and assign modified array to new variable newGA. = unsuccessfull
echo  $newGA ;

echo "<br>------------------------------------------------------------------------------------------<br><br>";
$lists = array(  'fruits' => array("Orange", "Apple", "Mango"),
                 'vegis'  => ['potato', 'cabbage', 'tomato'],
                 111, 222, 333
                 );

var_export ( $lists );
echo "<br><br>";
// now printing $lists array through foreach loop, if its element is an array then again through foreach loop.
foreach ($lists as $list => $val) {
        var_export($list);
        echo " ===>>>";
        if( is_array( $val ) )
           {
             echo 'array <br>';
             foreach ($val as $k => $v) {
                     var_export( $k );
                     echo " ===>";
                     var_export($v);
                     echo "<br>";
             }
           }
        else
           var_export($val);
           echo "<br>";
}
echo "<br>------------------------------------------------------------------------------------------<br>";
$a = ['PHP', 'Zend', "Certification", 195];
foreach ($a as $val) {
  echo "<br> Array element = $val";
}
echo "<br>------------------------------------------------------------------------------------------<br>";
$also = array();
var_dump($also);
echo '<br>';
$also['one'] = "FIRST";
$also[] = "SECOND";
$also[] = "THIRD";
$also['two'] = "FOURTH";
$also[] = 444;

var_dump($also);
echo '<br>';
$also[0b10] = "Overwritten";
var_export($also);
echo '<br><br>';

$ar = [11, 22, 33];
$unpacking = [1, 2, 3, ...$ar];
var_dump($ar);
echo '<br>';
var_dump($unpacking);
echo "<br>------------------------------------------------------------------------------------------<br>";
echo "<h4> Array Operators</h4>";
$x = array(...$ar, ...$unpacking);
$y = [22, 11, 33];
$z = array(...$y, ...$unpacking);
$aa = ['grape', 'mango'];
$bb = array( '1' => 'mango' , 00  => 'grape' );

echo "<br> \$ar ::: ";
     var_export($ar);
echo "<br> \$y ::: ";
     var_export($y);
echo "<br> \$x ::: ";
     var_export($x);
echo "<br> \$z ::: ";
     var_export($z);
echo "<br> \$aa ::: ";
     var_export($aa);
echo "<br> \$bb ::: ";
     var_export($bb);
echo "<br> \$ar == \$y  = ".( $ar == $y );
echo "<br> \$x != \$z  = ".( $x != $z );
echo "<br>Equal \$aa == \$bb  = ".( $aa == $bb );
echo "<br>But Not Identical  \$aa === \$bb  = ".( $aa === $bb );
echo "<br>Non-Identical  \$aa !== \$bb  = ".( $aa !== $bb );
echo "<br>Union  \$aa + \$bb  = ";
     var_export( $aa + $bb );
echo "<br>Union  array('a', 'b', 'c') + array( 'd', 'e', 'f')  = ";
     var_export( array('a', 'b', 'c') + array( 'd', 'e', 'f') );
echo "<br> In the above Union operation, values of RHS array are ignored because it has same keys as of LHS array. ";
echo "<br>Union  array('a', 'b', 'c') + array( 3 =>'d', 'e', 'f')  = ";
     var_export( array('a', 'b', 'c') + array( 3 => 'd', 'e', 'f') );
// if we omit initial key in RHS array, then due to similar keys, values of RHS array are ignored
echo "<br>Union  array('a', 'b', 'c') + array( 'd', 4=>'e', 'f')  = ";
     var_export( array('a', 'b', 'c') + array('d', 4=>'e', 'f') );
echo "<br> In the above Union operation, value 'd' is ignored because it has same key 0 as of value 'a'. ";

echo "<br>------------------------------------------------------------------------------------------<br>";
?>
</body>
</html>
