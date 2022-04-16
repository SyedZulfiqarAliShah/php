<?php

$test = $_GET["word"];
$n = strlen($test);
$z = $n-1;
$signal = true;
for($a=0; $a < ($n+1)/2; $a++ ){

      if( $test[$a] != $test[$z--] ){
           $signal = FALSE;
           break;
      }
}
      if($signal){
            echo $test." is a Palindrome";
          }
      else {
            echo $test." is Not a Palindrome";
           }

?>
