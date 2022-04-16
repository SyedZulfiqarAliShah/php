<html>
<body>
  <h2 align=center> Functions in PHP </h2>
<?php

  echo "<br> Sum = ".simple(2,3); // NOTE: Call before definition possible in PHP
  // Functions and Classes have global scope unless they are defined conditionally.

  function simple($a , $b)
  {
    print("<br> I am simple function.");
    return $a+$b;
  }

  echo "<br> Sum = ".simple(23,33);
//-----------------------------------------------
echo "<hr>";

 //inner(); // cannot call inner() before calling outer()

outer(); // This call gives birth to inner().
inner(); // Now inner() can be called because outer() was called before it.
innermost(); // Cannot be called until its container inner() is called.
// WHY? because conditionally defined functions have not global scope. because
// their definition is not sure, if their container is called then they will be
// defined otherwise not.

 function outer()
 {
   echo '<br> I am Outer. <br>';

   //inner(); cannot be called.

   function inner()
   {
      echo '<br> I am inner. <br>';

      function innermost()
      {
        echo '<br> I am innerMost';
      }

   }
 }
 //-----------------------------------------------
 echo "<hr>";

 function againMe($counter)
 {
  echo '<br> I am called recursively when count = '.$counter--;
  if($counter > 0)
     againMe($counter);

 }

 againMe(10);  // NOTE: spelling at Definition and Call.
 //-----------------------------------------------
 echo "<hr>";
echo 'Join or implode function <br>';
$arry = array('One','Two','Three');
$spec_1 = join(',' , $arry);
$spec_2 = implode(":::" , $arry); // join and implode are aliases of each other
print_r ($spec_2);
echo '<br>';
echo $spec_1;

echo '<br><br>';
$elements = array('a', 'b', 'c');
echo "<ul type=circle><li>" . implode("</li><li>", $elements) . "</li></ul>";

echo '<br><br>';
var_dump( implode( "::" , array(true,true,true,false,true,false) ) ); // Note effect of false

//-----------------------------------------------
echo "<hr>";

function sum(...$numbers) {    // ... is used for accessing variable number of args
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

echo 'Sum = '.sum(1, 2, 3, 4 ,5 ,6);

//-----------------------------------------------
echo "<hr>";
$one = 11;
$temp = 33;

function test( &$aa , $temp ){   //Note, & is required in Function definition during pass-by-ref

   echo '<br> Inside test, $aa = '.$aa.' and $temp = '.$temp;
   $temp += $aa += 100;

   echo ' After changing inside, $temp = '.$temp;
}

echo '<br> Before function call, $one = '.$one.' and $temp = '.$temp;

test( $one , $temp );  // Note, no & sign in function call when paasing-by-reference

echo '<br> After function call, $one = '.$one.' and $temp = '.$temp;
//--------------------------------------------------------------
echo "<h3> Returning a reference from a function </h3>";
function &ref_test(){
$num = 100;
return $num;
}

$aa = &ref_test();
echo '<br> $num = '.$num;
echo '<br> Caught with ref, $num = '.$aa; // Note, $aa cannot be replced by &ref_test();

//--------------------------------------------------------------
// Variable functions
echo '<hr>';
echo "<h3> Variable Functions </h3>";
function one(){
  echo "<br> I am function One-1";
  two();
}

function two(){
  echo "<br> I am function Two-2";
  three();
}

function three(){
  echo "<br> I am function Three-3";
}

$nums = array("one", "two", "three");
foreach( $nums as $v )
     {   $vv = $v;
         $vv();
     }
//--------------------------------------------------------------
// Variable functions
   echo '<hr>';
echo "<h3> Variable Functions </h3>";
 function add( $a , $b ){
      echo "<br> Sum of $a and $b = ".($a+$b); // without (), error occurs
 }

 function sub( $a , $b ){
      echo "<br> Difference of $a and $b = ".($a-$b); // without (), error occurs
 }

 function mult( $a , $b ){
      echo "<br> Product of $a and $b = ".$a*$b;
 }

 function div( $a , $b ){
      echo "<br> Division of $a by $b = ".$a/$b;
 }

$operations = array( "add", "sub", "mult", "div");

for($i=0; $i<4; ++$i)
   {
     $hold = $operations[$i];
     $hold( 10,3 );
   }
//--------------------------------------------------------------
echo '<hr>';
echo "<h3> Anonymous Functions </h3>";

$holder = function ($picker){echo "<br> $picker .";};
// now calling this anonymous function through $holder
$holder("First call");  // Note paranthesis with variable name.
$holder("Second call");
echo '<br>';

// the following is an array of anonymous functions
$listholder = array(
       function (){echo "<br> I am at index-0."; },
       function (){echo "<br> I am at index-1."; },
       function (){echo "<br> I am at index-2."; },
       function (){echo "<br> I am at index-3."; }
                    );
for($i=0; $i < sizeof($listholder); ++$i)
    $listholder[$i]();
//--------------------------------------------------------------------------
echo '<br> <b> Now with references.</b> <br>';
$listholder = array(
       function &(&$x = 100){echo "<br> I am squaring it. ". ($x * $x) ; // with default value
                      $x *= 2;  // contents modified
                      $y = $x + 100;
                      return $y;      // its reference is returned
                      },
       function &(&$x){echo "<br> I am doubling it.". ($x * 2) ;
                      $x -= 5;
                      $y = $x * 100;
                      return $y+100; // Note reference of the value of expression is returned
                      },
       function &(&$x){echo "<br> I am cubing it.".($x * $x * $x);
                        $x += 200;
                        $y = $x - 100;
                        return $y;
                      }
                    );  // end of array definition

$a=10;  $b=5; $d=20; $c; // whether $c is declared or not, it makes no difference.

echo "<br> \$a = $a ,  \$b = $b , \$c = $c , \$d = $d <br>";
     $e = $listholder[0]($a); // calling without using default value
     echo "<br> Now \$a = $a  and  \$e = $e <br>";

     $f = $listholder[2]($b);
     echo "<br> Now \$b = $b  and  \$f = $f <br>";

     $g = $listholder[1]($d);
     echo "<br> Now \$d = $d  and  \$g = $g <br>";

     $p = $listholder[0]($c); // calling for use of default value
     echo "<br> Now \$c = $c and \$p = $p <br";
     // output shows that since default value of $c is zero (by default) so no change
     // in value of $c inside the first anonymous function.
     // Here default value 100 is not utilized because $c possesses its own value.

     // inorder to utilize the default value 100, leave paranthesis empty.
     // then make use of ref-return to capture the effect of default value processing
     // outside the function.
     $c = $listholder[0](); // calling for use of default value
     echo "<br> Now \$c = $c <br>";

//--------------------------------------------------------------
echo '<hr>';
echo "<h3> Callback Functions </h3>";

// function callbackfunc( $str ){
//    return $str.$str;
// }
// $cities = array( "Lahore", "Islamabad", "Karachi", "Peshawar" );
// var_dump(array_map( callbackfunc, $cities ));

$cities = array( "Lahore", "Islamabad", "Karachi", "Peshawar", "Queta" );
// doing the same above functionality through anonymous functions

var_dump( array_map( function ($str){ return $str.$str; } , $cities ) );


?>


</body>
</html>
