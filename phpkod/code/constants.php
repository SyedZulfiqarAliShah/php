<html>
<head>
</head>
<body>

<?php
define("NAME" , "PAKISTAN");
define( "NUM" , 1000);

echo 'name = '.NAME."<br>";

echo 'square of NUM = '.NUM*NUM;

$i =1;
while($i <= 5){
echo 'name = '.NAME."<br>";
$i++;
}

echo "<br><br><br>";

// new style
$i =1;
while($i <= 15):
echo 'name = '.NAME."<br>";
$i++;
endwhile;
 ?>

</body>
</html>
