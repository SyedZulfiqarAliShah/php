<html>
<body>
<h2 align=center>Processing Arrays in PHP </h2>
<?php 
// Just defining classes for arr6
class Foo{
   public $nm = "Foo";
   public function __tostring(){
       return $this->nm;
   }
}

class Poo{
   public $nm = "Poo";
   public function __tostring(){
       return $this->nm;
   }
}

?>

<?php
echo "Different ways of defining arrays. <br>";
$arr1 = ['a','b','c','d','e'];
$arr2 = array (1,2,3,4,5,6);
$arr3 = array(0=>11 , 1=>22 , 2=>33 , 4=>44);
// key-value style
$arr4 = array("one"=>111 , "two"=>222 , "three"=>333 );
// key-value style which will not be printed Note.
$arr5 = array(8=>"at-eight" , 10=>"at-ten" , 1=>"at-one" , 0=>"at-zero");
//indexes can be mixed up
// specially note how $arr5 is printed. index 8 and 10 will be missed.
$arr6 = array( new Foo, new Poo );

$arrays = array("arr1" ,"arr2" ,"arr3" ,"arr4" ,"arr5" , "arr6" );
//storing all array variables in a varVar

for($j=0; $j < sizeof($arrays); ++$j)
{
 $len = sizeof( ${$arrays[$j]} );
 echo "<br> Size of".${$arrays[$j]}." = ".$len."<br>";
 for($i=0; $i<$len; ++$i)
    echo " ".${$arrays[$j]}[$i];
// Through the above looping arr1, arr2 and arr3(upto first 3 elements only) are printed correctly, while
// arr4 and arr5(elements stored at index 8 and 10) are not printed. It is because the loop-control variable is
// incrementing sequentailly while the indices of unprinted arrays/elements are not matching with the
// values of loop control variable. 
// For printing such arrays foreach loop is suitable as done below.
 echo "<br>";
}


echo "<hr>";
//--------------------------------------------------------
echo "<h3>Processing Differently</h3>";
foreach( $arrays as $k => $v)
{
 $len = sizeof( $$v ); // Note every element is a varVar
 echo "<br> Length of $v = $len"." stored at index = $k"."<br>";
 // prints name,size and index of every varVar element

foreach( $$v as $key => $val )
{
   echo " "." at $key value = $val"."<br>";

}
 echo "<br>";
}
 


?> <!-- closing PHP tag--> 
</body>
</html>
