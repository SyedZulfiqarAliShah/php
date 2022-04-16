<html>
<body>
<p>
  // and # both can be used for single line comments. <br>
  Only variable Names are case-sensitive. keywords, function names, class names are not.
   Variable names start with a $ sign. The dot(.) operator is used to concatenate outputs. <br>
Local variables having the the same names as global variables, hide the globals inside local scope.
</p>

<?php
$a = 100;
$b = 200;
echo "Before test():     Sum = ".($a+$b)."<br>";

function test(){
$a = 11;
$b = 12;
echo "Inside test() :    Sum = ".($a+$b)."<br>";
}

test();
echo "After test():      Sum = ".($a+$b)."<br>";
?>
<br><br>  <h3>Global Variables </h3>
<p>
keyword 'global' is used with local variables to access globals inside local scope.
</p>

<?php
$x = 300;
$y = 400;
echo "Before test1():     Sum = ".($x+$y)."<br>";

function test1(){
global $x , $y;
$y = 12;
echo "Inside test1() :    Sum = ".($x+$y)."<br>";
}

test1();
echo "After test1():      Sum = ".($x+$y)."<br>";
?>

<p>PHP also stores all global variables in an array called $GLOBALS[index].
  The index holds the name of the variable. This array is also accessible
  from within functions and can be used to update global variables directly.
</p>

<?php
$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
?>
</body>
</html>
