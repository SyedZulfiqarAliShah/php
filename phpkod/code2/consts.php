<html>
<body>

<?php
const PII = 3.1415;  // for improved readability constants are defined in upper case
const CITY = "Kohat";
const BIRDS = array("sparrow","crow","eagle");
define("COLLEGE","GCMS Kohat");
define("VeGi",array('tomato','potato')); // note mixed spelling of constant

echo PII.'<br>';
echo CITY.'<br>';
echo COLLEGE.'<br>';
echo BIRDS[1].'<br>';
echo BIRDS[0].'<br>';
echo VeGi[0].'<br>';

//PII = PII + 2; error, its not allowed

echo "<br> Printing List of defined constants.";
$list = get_defined_constants();
foreach($list as $v)
echo '<br>'."Constant: ".$v;

?>
</body>
</html>
