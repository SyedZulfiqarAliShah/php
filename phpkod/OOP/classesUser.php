<?php
include 'classes.php';
// provide car data in the sequence as Type, Model, Brand, Price and power
// Below creating one object and showing its data.

$car1 = new ClassContainer\car( "Sedan", 2019, "Honda", 3000000, 1500 );
$car1->showdata();

// Now creating an array of cars and then showing it.

$list = array(
                new ClassContainer\car( "Sedan", 2017, "Toyota", 4000000, 1800 ),
                new ClassContainer\car( "Jeep",  2016, "Honda",  6000000, 2400 ),
                new ClassContainer\car( "Sedan", 2016, "Nissan", 2500000, 1300 ),
                new ClassContainer\car( "Sedan", 2021, "Suzuki", 2000000, 1000 )
            );

echo "<br><br> Printing array of cars.<br>";

for( $i=0; $i < sizeof($list); ++$i )            
{            
    $list[$i]->showdata();
    echo "<br>";
}
/*
echo "<br><br> var_dump() array of cars.<br>";
var_dump( $list );
*/ //-----------------------------------------------------------------------------------------------
// Demonstration of Super and Base classes
// Also showing shortcut notation for remote (namespaced) classes

use ClassContainer\Super;
use ClassContainer\Base;

$sobj = new Super;
//$bobj = new Base;

Super::showcount();
Base::showcount();





?>