<html>
<body>
<?php

$var_name = "city";
$$var_name = "Lahore";

echo "\$var_name = ".$var_name.'<br>';
echo "\$city = ".$city.'<br>';
echo "\$\$var_name = ".$$var_name.'<br>';
echo "<hr>";

$color="white";
$car = "color" ;
echo "<br> \$color = ".$color;
echo "<br> \$car = ".$car;
echo "<br> \$\$car = ".$$car;



$lahore = 400;
$peshawar = 60;
$islamabad = 150;

$city = "lahore";
echo "<br> Name of city is $city and its distance is ${$city}";
$city = "peshawar";
echo "<br> Name of city is $city and its distance is ${$city}";
$city = "islamabad";
echo "<br> Name of city is $city and its distance is ${$city}";
//--------------------------------------------------------
echo "<hr>"."<h3>Now printing through array </h3>";
$sparrow = "grey";
$crow = "black";
$parrot = "green";
$swan = "white";

$birdcolor = array( $sparrow , $crow , $parrot , $swan );
for($i = 0; $i<4; $i++)
   echo "<br>"." \$birdcolor[$i] = ".$birdcolor[$i];

?>

</body>
</html>
