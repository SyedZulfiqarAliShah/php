<html>
<body>
<h2>ASCII List </h2>
<?php
for( $c=1; $c<=255; ++$c )
   {
       if( $c % 20 == 0 )
          echo "<br>";

   printf(" %c", $c);   
   }
?>
</body>
</html>
