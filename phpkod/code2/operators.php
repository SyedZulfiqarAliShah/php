<html>
<body>
<h3 align=center>Operators' Precedence in PHP </h3>
<?php
echo "<p> <b>Arithmetic Operators</b> </p>";
$i = 10; $a = 2; $b = 3; $c = 5; $d = 4;
echo '<br>'." $i * $c / $d  = ".$i * $c / $d;
echo '<br>'." $i % $b - $a + $d * $c  = ".($i % $b - $a + $d * $c);
echo '<br>'." $i * $a**$d + $b  = ".($i * $a**$d + $b) ;
echo '<br>'." $c * $d ** $b / $b % $i  = ".($c * $d ** $b / $b % $i ) ;

//------------------------------------------------
echo "<hr>";
echo "<p> <b>Comparison Operators</b> </p>";
echo '<br>'." $i <=> ($a*$c)  -----  ".($i <=> ($a * $c));  // spaceship operator
echo '<br>'." $i <=> ($d*$c)  -----  ".($i <=> ($d * $c));
echo '<br>'." $i <=> ($a*$d)  -----  ".($i <=> ($a * $d));
echo '<br>'." $i  == ($a*$c)  -----  ".($i == ($a * $c));
echo '<br>'." $i  != ($a*$c)  -----  ".($i != ($a * $c));
echo '<br>'." $i  <> ($a*$c)  -----  ".($i <> ($a * $c));
echo '<br>'." ($a + $b) === $c  -----  ".(($a + $b) === $c);
echo '<br>'." ($a + $b) !== $d  -----  ".(($a + $b) !== $d);
echo '<br>'." ($i > $a*$b < $d)  -----  ".(($i > $a*$b) < $d); // unexpected output

//------------------------------------------------
echo "<hr>";
//$i = 10; $a = 2; $b = 3; $c = 5; $d = 4;
echo "<p> <b>Logical Operators</b> </p>";
echo '<br>'." $a < $b and $c > $d  -----  ".( $a < $b and $c > $d);
echo '<br>'." $i < $b or $c > $d  -----  ".( $i < $b or $c > $d);
echo '<br>'." $i < $b xor $c > $d  -----  ".( $i < $b xor $c > $d);
echo '<br>'." $i < $b or $c < $d  -----  ".( $i < $b or $c < $d);
echo '<br>'." $i < $b xor $c < $d  -----  ".( $i < $b xor $c < $d);
echo '<br>'." $i <> $b and $c != $d  -----  ".( $i <> $b and $c != $d);
echo '<br>'." $i <> $b xor $c != $d  -----  ".( $i <> $b xor $c != $d);
echo '<br>'." $i and $d  -----  ".( $i and $d);
echo '<br>'." $i xor $d  -----  ".( $i xor $d);
echo '<br>'." $i and $d && $d % $a -----  ".( $i and $d && $d % $a);
echo '<br>'." $i and $d && $d / $a -----  ".( $i and $d && $d / $a);
echo '<br>'." $i and $d % $a && $d / $a -----  ".( $i and $d % $a && $d / $a);

//------------------------------------------------
echo "<hr>";
echo "<p> <b>String Operators</b> </p>";
$str = 'Pakistan';
echo "<br>"."I love my ".$str;
echo "<br>".($str .= $str)."Jevay".$str; // Note the effect of last $str
// If we remove parenthesis from above expression like "<br>".$str .= $str."Jevay".$str;
// then since .= has right associativity and . has higher precedence (and left assoc),
// therefore, first $str will be concatenated to "Jevay" making it "JevayPakistan"
// then "JevayPakistan" will be concatenated to $str making it "PakistanJevayPakistan",
// finally again $str will be concatenated to "PakistanJevayPakistan" ( due to .= )
// making it "PakistanPakistanJevayPakistan"
// To test this, make above 47 as comments and try the following.
// echo "<br>".$str .= $str."Jevay".$str;
echo "<br>".$str;
//echo "<br>".$str .= $str;
//$str .= $str;
//echo "<br>".$str;
//echo "<br>".$str .= $str;
echo "<br> -------------------------------------------";
$foo = $poo = null;
$q = 1; $p = 0;
echo $foo ?? "<br> Printed";
echo $poo ?? "<br> Printed again <br>";
echo $q ?? "<br> Not printed";
echo '<br>';
echo $foo ?? $poo ?? $q;
echo '<br>';
echo $foo ?? $poo ?? $p ?? $q; // Note that ZERO (0) is not NULL
// ?? has right associativity means (((a+b)+c)+d)
// left associativity means  (a+(b+(c+d)))
// The expression ( expr-1 ?? expr-2 )  evaluates to expr-2 if expr-1 is NULL
// otherwise evaluates to expr-1.

//------------------------------------------------
echo "<hr>";
echo "<p> <b>Bitwise Operators</b> </p>";
echo '<br>'." 5 & 11  -----  ".( 5 & 11);
echo '<br>'." 5 | 11  -----  ".( 5 | 11);
echo '<br>'." 'Ab' & 'Bc'  -----  ".( 'Ab' & 'Bc');


//------------------------------------------------
echo "<hr>";
echo "<p> <b>Spaceship Operator <=> </b> </p>";
print( 1 <=> 1);print("\n");
   print( 2 <=> 1);print("\n");
   print( "naME" <=> "namE");print("\n");
   print("\n\n");

?>
</body>
</html>
