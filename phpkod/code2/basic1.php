<html>
<body>
<h2>Integers </h2>
<?php
echo 'Size of Integer = '.PHP_INT_SIZE.' Bytes';
echo '<br>'.'Max value of Integer = '.PHP_INT_MAX;
echo '<br>'.'Min value of Integer = '.PHP_INT_MIN;

echo '<br><br>'.'Max value of float = '.PHP_FLOAT_MAX;
echo '<br>'.'Min value of float = '.PHP_FLOAT_MIN;

$num = 9223372036472122341;
echo '<br><br>'.$num;
echo '<br>'.gettype($num);
echo '<hr>';

$x = 10;
echo '<h3>Strings</h3>';
echo '<br>'.'apostrophe"';
echo '<br>'.'value of Variable inside pair of single quotes x = $x ';
echo '<br>'."value of Variable inside pair of double quotes x = $x ";
echo '<br>'.'Long sentence \n on second line due to newline escape sequence. enclosed by single quote';
echo '<br>'."Long sentence \n on second line due to newline escape sequence. enclosed by double quote";
echo '<br>'.'Note: in above line, \n is not printed';
?>

</body>
</html>
