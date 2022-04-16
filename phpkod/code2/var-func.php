<html>
<body>
<h2>Variable Functions </h2>
<?php

function one()
{ echo "<br> I am function ONE";  }

function two()
{ echo "<br> I am function TWO";  }

function three()
{ echo "<br> I am function THREE";  }

$list = array( 'one', 'two', 'three' );

foreach( $list as $func )
         $func();
         
//-----------------------------------------------------------------------
// phpinfo();
$lst = get_loaded_extensions() ;
echo "<br>";

foreach($lst as $v)
echo "<br> Loaded Modules =  $v";


?>
</body>
</html>
