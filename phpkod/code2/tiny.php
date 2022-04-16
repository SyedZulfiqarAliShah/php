<html>
<body>
<h2 align = center>Variable Scopes </h2>
<?php
$a = "global string";  // global string variable
$gi = 100; // global integer variable
$c = true;

function one(){
$a = "inside function";
$gi = 20;
echo " Global string called inside a function = $a"."<br>";
print_r ($gi); // local gi overlapping global gi
echo "<br>";
echo $c;  // this global variable is not printed. PHP does not allow this without the keyword global.
//global $a;
echo "<br> Now printed = ".$GLOBALS['c']."<br>";
//echo "<br> Global string called inside a function through global keyword = $a"."<br>";
echo "<br> Another way of calling global variable = ". $GLOBALS['a'];
}

echo " Global string variable = $a"."<br>";
var_dump($gi);
echo "<br><br>Function called <br>";

one();

echo "<br><br> Global string variable after function call = $a"."<br>";
var_export($gi);
echo "<hr>";
?>
<!--------------------------------------------------------------------->
<?php
function test()
{
    static $count = 0;
    $count++;
    $hold = $count;
    echo $count."<br>";
    if ($count < 5) {
        test();
        echo "  going back now recursively when \$count reached $count and \$hold = $hold.<br>";
    }
}
test(); // function call
echo "<hr>";
echo "<h3>Variable variable </h3>";

$w = "world";
$$w = "cup";
$$$w = "magic";
$$$$w = "more magic";
$$$$$w = "Searching more";
$$$$$$w = "Limit not found";

echo "\$w = ".$w;
echo "<br> \$\$w = ".$$w;
echo "<br>Because    \$$w = ".$$w;

echo "<br><br> Testing \$\$\$w = ".$$$w;
echo "<br> Testing more \$\$\$\$w = ".$$$$w;
echo "<br> Testing more \$\$\$\$\$w = ".$$$$$w;
echo "<br> Testing more \$\$\$\$\$\$w = ".$$$$$$w;

echo "<br><br> Now printing values: $w , ${$w} , ${${$w}} , ${${${$w}}} , ${${${${$w}}}} , ${${${${${$w}}}}}";
echo "<br> Now printing values differently: $w , ${$w} , ${$$w} , ${$$$w} , ${$$$$w} , ${$$$$$w}";



?>

</body>
</html>
