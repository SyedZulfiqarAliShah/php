<html>
<body>
<!--
If-else statement
-->
<?php
$a = rand();
$b = getrandmax();
echo "\n \$a = $a  <br>    \$b = $b  <br>";
if ($a > $b)
      echo "Greater Number is $a";
else {
       echo "Greater number is $b";
}
//----------------------------------------------------------------
// using if in another way
$a = rand(10 , 100);
$b = rand(10 , 200);
echo "<br><br> \$a = $a  <br>    \$b = $b  <br><br>";
?>

<?php    if ($a > $b):  ?>       <!--  Note the Full colon, its required. -->
   <p> <?php echo " $a is greater than $b";   ?> </p>
<?php  else:  ?>                 <!--  Note the Full colon, its required. -->
   <p> <?php  echo " $b is greater than $a";?> </p>
<?php  endif; ?>                 <!--  Here semi-colon is optional. -->

</body>
</html>
