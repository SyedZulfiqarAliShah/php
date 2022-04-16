<html>
<body>
<?php
$nm = "Computer - Language";
//print(strlen($nm));
for($i=0; $i< strlen($nm) ; ++$i)
   print $nm[$i]."  "; // here $nm is an array but $nm[i] is a scalar type
// replace empty string in above line by <br> to write vertically
print '<hr>';
// now playing with Var-var in arrays and loops.
$list = array('color' , 'brand' , 'model' , 'price');
$color = "White";
$brand = "Honda";
$model = 2016;
$price = 2500000;
foreach($list as $l)
  echo "<br> $l = ${$l}";

print'<hr>';
echo "main-container = $list and Element = $list[2] and
      Element-value = ${$list[2]} <br>";   // Using inside quotes.  NoTe line feed is ignored
echo $list." and ".$list[2]." and ".${$list[2]};       // Using without quotes.
print'<hr>';

// printing in a different way.
print(" Printing differently ".'<br>');
for($i=0; $i < sizeof($list); ++$i){
    echo "<br> \$list[$i] = $list[$i] ---and--- $list[$i] = ${$list[$i]}";
}
//---------------------------------------------------
echo '<hr>'."Advanced Level";
$rose      = "red";
$jassamine = "white";
$daisy     = "purple";
$broom     = "yellow";
$brassica  = "pink";
$lily      = "white";
$celosia   = "orange";
$chicory   = "skyblue";
$cosmos    = "pink";
$daffodil  = "yellow";
  $flowers   = array("rose","jassamine","daisy","broom","brassica","lily",
                     "celosia","chicory","cosmos","daffodil");

$civic = "Honda";
$camry = "Toyota";
$margalla = "Suzuki";
  $cars = array("civic","camry","margalla");

$firefox = "web browser";
$php = "scripting language";
$avira = "anti virus";
$windows = "operating system";
  $software = array("firefox","php","avira","windows");

$items = array( "flowers" , "cars" , "software" );   // higher level var var

echo "<br>";
foreach( $items as $i)
{
  foreach( $$i as $j)
  {
    echo "<br> $i = ${$j} "; // NoTe each ${$i} is itself an array
  }
  echo "<br>";
}
//----------------------------------------------
echo "<hr>"; // Now printing status of these var of Vars

echo "Status of \$items: ";
var_dump($items);

echo "<br> Status of \$items[1]: ";
var_dump($items[1]);

echo "<br> Status of \$\$items[1]: ";
var_dump($$items[1]);

echo "<br> Status of \${\$items[1]}: ";
var_dump(${$items[1]});

echo "<br> Status of \${\$items}[1]: ";
var_dump(${$items}[1]);


//----------------------------------------------
echo "<hr> Differently <br>";
for( $x = 0; $x < sizeof($items); ++$x)
{
  echo "<br> \$items[$x] = $items[$x] <br>"; // printing categories
  $len = sizeof(${$items[$x]});  // catching size
  $abc = ${$items[$x]};          // catching array-element which is itself an array

  for( $y=0; $y < $len; ++$y)
  {
    echo "<br>".$items[$x]." = ".$abc[$y];
  }
  echo "<br>";
}
//----------------------------------------------
echo '<hr>';
echo "<br> IMPORTANT Further Different Attempt <br>";
for( $x = 0; $x < sizeof($items); ++$x)
{
  echo "<br> \$items[$x] = $items[$x] <br>"; // printing categories
  $len = sizeof(${$items[$x]});  // catching size

  for( $y=0; $y < $len; ++$y)
  {
    echo "<br>".$items[$x]." = ".${$items[$x]}[$y];
    // crux: $items is a variable  AND ${...}[$y] goes [$y] index from that variable 
  }
  echo "<br>";
}
//----------------------------------------------

?>
</body>
</html>
