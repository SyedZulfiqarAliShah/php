<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
// following code is for comparing var_dump() & var_explore().
    /*
    $values = array(23, "23", 23.5, "23.5", null, true, false);
    foreach ($values as $value) {
        echo "is_int(";
        var_export($value);
        echo ") = ";
        var_dump(is_int($value));
        print '<br>';
        echo '<br>';
    }
    echo '<br>' , '<p>Comparison of var_export() and var_dump() </p>' , '<br>';
    foreach ($values as $value) {
        var_export($value);
        echo " = ";
        var_dump($value);
        echo '<br>';
    }
*/
     ?>
<!-- ------------------------------------------------------------------ -->
     <hr>
     <h4>Printing array with print_r()</h4>
<?php
$lst = array('hello', 123, 32.2345, true, false, null, true);
print_r($lst); // add TRUE as second parameter and observe the output
print '<br>';
echo 'is_null( $lst[ 5 ] ) = ';     // printing message
echo  is_null($lst[5]);      // printing returned value

?>
<!-- ---------------------------------------------------------------- -->
<hr>
<h4>Printing array with print_r() with true parameter</h4>
<?php
$retval = print_r($lst , true ); // print_r() returns a string now
echo $retval;
?>
<!-- ---------------------------------------------------------------- -->
      <hr>
      <h4>Printing the above array with var_dump()</h4>
      <h6>Also note that variable name is accessible between php code snippets</h6>
<?php
var_dump($lst , 23 , 45.54, array(true,false,'abc')); // note multiple parameters
?>
<!-- ---------------------------------------------------------------- -->
      <hr>
      <h4>Printing the above array with var_export()</h4>
<?php
$retv1 = var_export($lst); // note first value in output, its a string enclosed with quotes.
// it returns a PHP executable code.
echo "<br>" , gettype($retv1); // returns NULL type when used without TRUE.
echo "<br><br> Now with TRUE as second parameter <br>";

$retv2 = var_export($lst , true); // note it does not print the output with TRUE.
echo "<br>" , gettype($retv2); // return type is string now
echo '<br><br>'.$retv2; // output is same as without true

?>
  </body>
</html>
