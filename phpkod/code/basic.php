<html>
<head>
</head>
<body>

<?php

echo "This is the name of scripting file on this SERVER =   ";
 echo $_SERVER['SCRIPT_NAME'];
 ?>
<hr>
<h2>Variables within variable </h2>

<?php
 $one = "Original";
 $var = "one";
 echo "Value of var ONE = ".$one."<br><br>" ;

// accessing one indirectly in below atatement
$$var = "Original Replaced through another variable."; // $$var = $(value of $var)  means  $one
echo $$var."<br><br>" ; // write the contents of $($var = one)
echo $one."<br><br>";
echo $var."<br><br>";

print "This is an example to show that we can write
      text in echo statement which is written on more than one lines.
      And it still works correctly. "."<br><br>";
echo "Variable names can be used in Double quotes to print their VALUES. <br>
      such as $var"."<br><br>";

echo 'But if single quotes are used around text in echo statement then <br>
      Name of variable will be printed instead of its value. <br>
      such as this $var.'."<br><br>";
echo "comma separated list of variables can be printed through echo but NOT through Print."."<br>".
     "such as this one:  ",  $var ," ", $one , "<br><br>";
/*
print "comma separated list of variables canNOT be printed through PRINT."."<br>".
          "such as this one:  ",  $var ," ", $one;
*/

 ?>

</body>
</html>
