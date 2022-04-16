<html>
<head>
</head>
<body>

<?php
// strings CANNOT be concatenated through + sign in php
// . sign is used for concatenation
// , separated output can also be generated through echo.
// put a / before varaible name to print its name instead of its value.

$str1 = "first";
$str2 = "second";
$str3 = "third";
echo "\$str1 : $str1 and strlen(\$str1) is = ", strlen( $str1 ). "<br><br>";
echo "\$str2 = $str2 and strlen(\$str2) is = ", strlen( $str2 )."<br><br>";
echo "\$str3 = $str3 and strlen(\$str3) is = ", strlen( $str3 )."<br><br><hr>";

echo "\$str1.\$str2.\$str3 = ".$str1.$str2.$str3."<br><br>";
echo "\$str1. \$str2. \$str3 = ".$str1.chr(32).$str2.chr(32).$str3."<br><br>"; // note the space character 32
echo "\$str1,\$str2,\$str3 = ".$str1,$str2,$str3."<br><br><hr>";

echo "<h2>Strings Are Actually Char-Arrays </h2>";
$str4 = $str1.chr(32).$str2.chr(32).$str3;
echo "\$str4 = $str4"."<br><br>";
for($i=0; $i < strlen($str4); $i++)
   echo "\$str4[$i] = ".$str4[$i]."<br>";
echo "<br><br><hr>";

// embedding uppercase letters in an array
for($i=65; $i <= 90; $i++)
   $stralpha .= chr($i);
echo "\$stralpha = ".$stralpha;

// embedding lowercase letters in the same array
for($i=97; $i <= 122; $i++)
   $stralpha .= chr($i);
echo "<br><br>"."\$stralpha = ".$stralpha;
echo "<br><br><hr>";

echo "<h2>STRING FUNCTIONS </h2>";
echo "strtoupper($str1) = ".strtoupper($str1)."<br>";
echo "strtoupper($str3) = ".strtoupper($str3)."<br>";
echo "\$str4 = ".$str4."<br>";
echo "ucfirst($str2) = ".ucfirst($str2)."<br>";
echo "ucwords($str4) = ".ucwords($str4)."<br>";
echo "strlen(\$stralpha) = strlen($stralpha) = ".strlen($stralpha)."<br>";
echo "strcmp($str3 , $str1) = ".strcmp($str3,$str1)."<br>";
echo "strcmp($str1 , $str2) = ".strcmp($str1,$str2)."<br>";
echo "strcmp($str3 , $str3) = ".strcmp($str3,$str3)."<br><br>";

$s1 = "Pass"; $s2 = "pass";
echo "\$s1 = ".$s1." \$s2 = ".$s2."<br>";

echo "strcmp($s2 , $s1) = ".strcmp($s2,$s1)."\\\\ its case sensitive.<br>";
echo "strcasecmp($s2 , $s1) = ".strcmp($s2,$s1)."\\\\ its NOT case sensitive.<br><br>";
echo "chr(56) = ".chr(56)."<br>"; // returns the character of given ASCII
echo "ord(F) = ".ord('F')."<br><br>"; // returns the ASCII of given character

echo "position of K in \$stralpha = ".strpos($stralpha , 'K')."<br>";
echo "position of abc in \$stralpha = ".strpos($stralpha , "abc")."<br>";
echo "position of M in \$stralpha starting from 10 = ".strpos($stralpha , 'M' , 10)."<br><br>";  // offset is optional

$s3 = "Passwords should be kept hidden from public access.";
echo "\$s3 = ".$s3."<br>";
$s4 = str_replace( "kept" , "KEPT" , $s3 );
echo " AFTER REPLACEMENT <br> \$s4 = ".$s4."<br><br>";

// below two arrays of words are used to replace one with the other.
// here the location of words in each array matters w.r.t the other array.
$line = "This text contains words: apple , mango , banana , grapes, mangomangoapple.";
$fruits = array("apple","banana", "mango","grapes");
$vegi = array("potato", "tomato", "carrot" ,"raddish" );

echo "<br> Original \$line = ".$line."<br><br>";
echo " AFTER REPLACEMENT <br> \$line = ";
$newline = str_replace( $fruits , $vegi ,$line );
echo $newline;
$pos = strpos($line , "mangom");
echo "<br><br>"." Position of mangomangoapple in \$line = \$pos = ".$pos;
echo "<br><br><hr>";
// extracts a substring which starts at 2nd arg within the first arg.
// 3rd arg is the number of characters to be extracted.
echo "substr(\$line , \$pos) = ".substr($line,$pos)."<br>";
echo "substr(\$line , \$pos , 7) = ".substr($line,$pos,7)."<br>";
echo "substr(\$line , -1 ) = ".substr($line, -1)." // counts back from end"."<br>";
echo "substr(\$line , -5) = ".substr($line, -5)."<br>";
echo "substr(\$line , -5, 4) = ".substr($line, -5, 4)." // No effect of 3rd argument"."<br>";
echo "substr(\$line , -5, 10) = ".substr($line, -5, 10)." // No effect of 3rd argument"."<br>";
// curly brackets can also be used for accessing individual chars
// square brackets are already used in above examples.
echo "\$line{5} = ".$line{5}."<br>";
echo "\$line{53} = ".$line{53}."<br><hr>";

$long = "a1=city&b1=class&c1=name&d1=fname+lname";
echo "<h3>STRING PARSING / SPLITTING / </h3>";
parse_str($long);
echo "\$a1 = ".$a1."<br>";
echo "\$b1 = ".$b1."<br>";
echo "\$c1 = ".$c1."<br>";
echo "\$d1 = ".$d1."<br><br>";
// can also be parsed into an array. Explained below.
$long2 = "a[]=street+city&a[]=class+college&a[]=name&a[]=fname+lname"."<br>";
parse_str($long2);
echo "\$a[0] = ".$a[0]."<br>";
echo "\$a[1] = ".$a[1]."<br>";
echo "\$a[2] = ".$a[2]."<br>";
echo "\$a[3] = ".$a[3]."<br>";
// parsed tokens can be put into a prespecified array.
$long3 = "city=kohat&sclass=PhD&name=Zulfiqar+Shah";
parse_str($long3 , $tokens);
echo "\$tokens['city'] = ".$tokens['city']."<br>";
echo "\$tokens['sclass'] = ".$tokens['sclass']."<br>";
echo "\$tokens['name'] = ".$tokens['name']."<br><br><br>";

$sentence = "This is an example for Split function.";
$ar_tokens = preg_split( '/ /', $sentence );
print_r($ar_tokens);

// similar functionality is provided by explode function.
echo "<br><br> <u>EXPLODE FUNCTION</u> <br><br>";
$sentence2 = "This is an example for Explode and implode function.";
$tok = explode( " " , $sentence2 ); // tokens at spaces
for($i=0; $i < count($tok); $i++)
   echo $i, " : " , $tok[$i] ,"<br>";

// implode performs the reverse functionality of explode.
echo "<br><br> <u>IMPLODE FUNCTION</u> <br><br>";
$text = implode(", " , $tok ); // provide separator as comma and space
echo $text;

echo "<br><br><hr>";
echo "<h3> <u> OUTPUT / Input</u> </h3>";

$num = 100; $item = "processor";
$format = "This %s costs %d rupees.<br>";
printf( $format, $item, $num );// printf(): outputs a formatted string
echo "<br>";

$ar_date = getdate(); // get system date in shape of array
echo "<br>".print_r($ar_date)."<br>";
$dt = sprintf( "%02d-%02d-%04d", $ar_date['mday'], $ar_date['mon'], $ar_date['year'] );
echo "<br>".$dt;
$yr = 2018; $mn = 4; $d = 22;
$dt2 = sprintf("%d-%d-%04d", $d, $mn, $yr);// sprintf(): returns a formatted string
echo "<br>".$dt2."<br>";
$dt3 = "May 22 2019";
list($mon, $day, $yr) = sscanf( $dt3, "%s %d %d" );// sscanf(): parses formatted string input
echo "The Date = $day-$mon-$yr"."<br>";
echo "<br><br>";
echo "<br>FORMAT SPECIFIERS<br>";
$a = 23400;
$b = -1234;
$c = 90;
echo "\$a = $a <br> \$b = $b <br> \$c = 90 <br><br>";
printf( "(integer representation) %%d of \$a = %d <br>", $a );
printf( "(binary representation) %%b of \$a = %b <br>", $a );
printf( "(octal representation)  %%o of \$a = %o <br>", $a );
printf( "(hexa representation)   %%x of \$a = %x <br>", $a ); // lowercase hexa
printf( "(HEXA representation)   %%X of \$a = %X <br>", $a ); // uppercase hexa
printf( "(string representation) %%s of \$a = %s <br>", $a );
printf( " %%c of \$c = '%c' <br>", $c );
printf( "(unsigned representation) %%u of \$a = %u <br>", $a );
printf( "(unsigned representation) %%u of \$b = %u <br>", $b );
printf( "(float representation) %%f of \$a = %f <br>", $a );
printf( "(scientific representation) %%e of \$a = %e <br>", $a );
echo "<br><hr><br>";
echo "<h2>REGULAR EXPRESSIONS To be seen in Detail. Lectute# 7.04 and 7.05</h2>";









?>
</body>
</html>
