<html>
<head>
</head>
<body>
<h2>Practice Corner</h2>
<?php
echo "Welcome back to practicing PHP"."<br>";
$x = 100;
echo $x * $x;
echo "<br>"."intval(\$x) = ".intval($x);
echo "<br>"."intval('$x') = ".intval("$x");
echo "<br>"."intval('$x+11') = ".intval("$x+11");
echo "<br>"."intval('11+$x') = ".intval("11+$x");
echo "<br>"."Bin-to-Deci: intval(0b101) = ".intval(0b101);
echo "<br>"."Octal-to-Deci: intval(-0101) = ".intval(-0101);
echo "<br>"."Hexa-to-Deci: intval(0x101) = ".intval(0x101);
echo "<br>"."intval(042) = ".intval(042);
echo "<br>"."intval('042') = ".intval('042');
echo "<br>"."intval(4.9) = ".intval(4.9);
echo "<br>"."intval('042', 8) = ".intval('042', 8);
echo "<br>"."intval(0x1a) = ".intval(0x1a);
echo "<br>"."intval('0x1a') = ".intval('0x1a');
echo "<br>"."intval('0x1a', 16) = ".intval('0x1a', 16);
echo "<br>"."intval(77, 8) = ".intval(77, 8);
echo "<br>"."intval( array(1,0) ) = ".intval( array(1,0) );
echo "<br>"."intval( array(0) ) = ".intval( array(0) );
echo "<br>"."intval( array() ) = ".intval( array() );


echo "<br>"."intval(4e18) = ".intval(4e18);
echo "<br> PHP_INT_MAX = ".PHP_INT_MAX;
echo "<br> PHP_INT_MIN = ".PHP_INT_MIN;
echo "<br>"."intval(9223372036854775807) = ".intval(9223372036854775807);
echo "<br>"."intval(9223372036854775808) = ".intval(9223372036854775808);
echo "<br>"."intval(9223372036854775809) = ".intval(9223372036854775809);
echo "<br>"."intval(9223372036854775810) = ".intval(9223372036854775810);
echo "<br>"."intval(9223372036854775811) = ".intval(9223372036854775811);
echo "<br>"."intval(9223372036854775907) = ".intval(9223372036854775907);
echo "<br>". 9223372036854775808;
echo "<br> Above examples shows minimum value is retained during INT overlow in intval(). But normally INT overflow converts to float.<br>";
echo "<br> (int) 4.999 = ".(int) 4.999;echo "<br> (int) ( 4.999 + 0.001) = ".(int) (4.999 + 0.001);
echo "<br> (int) ( (0.1 + 0.7)*10) = ".(int) ((0.1 + 0.7)*10)." sometimes Unexpected result";
echo "<br> var_dump(0x7fffffffffffffff) = "; var_dump(0x7fffffffffffffff);
echo "<br> var_dump(0x7fffffffffffffff + 1) = "; var_dump(0x7fffffffffffffff + 1);
echo "<br> var_dump((int)(0x7fffffffffffffff + 1)) = "; var_dump((int)(0x7fffffffffffffff + 1));
echo "<br> var_dump(010) = "; var_dump(010);
echo "<br> var_dump('010') = "; var_dump("010");
echo "<br> var_dump((int)'010') = "; var_dump((int)"010");
echo "<br> octdec('010') = ".octdec("010");
echo "<br> hexdec('010') = ".hexdec("010");
echo "<br> (int) '54321' = ". (int) "54321";
echo "<br> (int) '000054321' = ". (int) "000054321";
echo "<br> (int) '00X054321' = ". (int) "00X054321";
echo "<br> var_dump((string) 010) = "; var_dump((string) 010);
echo "<br> var_dump((string) 0b111) = "; var_dump((string) 0b111);
echo "<br> var_dump((string) 0x10) = "; var_dump((string) 0x10);



echo "<br>---------------------------------------------------------------------------------------------";
echo "<br> \$x = $x";  // inside dbl quotes variable's value is used
echo '<br> \$x = $x'; // inside single quotes variable's value is not used
echo "<br> Type of \$x = ".gettype($x);
echo "<br> Size of \$x = ".PHP_INT_SIZE." Bytes";
echo "<br>  var_dump() functionality::::";
      var_dump(array(2,3,5.5, array("Hi",true)));
echo "<br>";

?>

<?php
print '<br>';
var_dump((bool) "");        print '<br>'; // bool(false)
var_dump((bool) "0");       print '<br>'; // bool(false)
var_dump((bool) 1);         print '<br>'; // bool(true)
var_dump((bool) -2);        print '<br>'; // bool(true)
var_dump((bool) "foo");     print '<br>'; // bool(true)
var_dump((bool) 2.3e5);     print '<br>'; // bool(true)
var_dump((bool) array(12)); print '<br>'; // bool(true)
var_dump((bool) array());   print '<br>'; // bool(false)
var_dump((bool) "false");   print '<br>'; // bool(true)
var_dump((bool) false);     print '<br>'; // bool(true)
var_dump((bool) True);      print '<br><br>'; // bool(true)
?>

<?php
$a = 1234; // decimal number
print $a.'<br>';
$a = 012_3; // octal number (equivalent to 83 decimal)
print "Octal NS   0123 = ".$a.'<br>';
$a = 0x1_A; // hexadecimal number (equivalent to 26 decimal)
print "Hexa NS   0x1A = ".$a.'<br>';
$a = 0b11111_111; // binary number (equivalent to 255 decimal)
print "Binary NS   0b11111111 = ".$a.'<br>';
$a = 1_234_567; // decimal number (as of PHP 7.4.0)
print "1_234_567 = ".$a.'<br><br>';
?>
<?php
print "intdiv(34, 4) = ".intdiv(34,4).'<br>';
print "intdiv(PHP_INT_MIN, 4) = ".intdiv(PHP_INT_MIN,4).'<br>';
print "intdiv(PHP_INT_MIN, -4) = ".intdiv(PHP_INT_MIN,-4).'<br>';
print "intdiv(PHP_INT_MIN, 1) = ".intdiv(PHP_INT_MIN,1).'<br>';
print "intdiv(PHP_INT_MIN, -1) = Throws an ArithmeticError exception";//.intdiv(PHP_INT_MIN,-1).'<br>';
print "<br> (34/5) = ".(34/5).'<br>';
print "(34/0) = ".(34/0).'<br>';
print "round(34/5) = ".round(34/5).'<br>';
echo "<br>------------------------------------------------------------------------------------------------<br>";
?>
</body>
</html>
