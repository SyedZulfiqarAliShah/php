<?php
class Test
{
    static public function getNew() 
    {
        return new static;
    }
}

class Child extends Test
{}

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);

//=====================================================================================
?>

<?php
echo '<br>';

class Foo
{
    public $bar = 'property';
    
    public function bar() {
        return 'method';
    }
}

$obj = new Foo();
echo '<br>', $obj->bar, '<br>', $obj->bar();
echo '<br><br>', $obj->bar(), '<br>', $obj->bar;
//=====================================================================================
?>

<?php
echo '<br>';

class Fool {

            public $bar;
/*
            public function __construct(){
                $this->bar = function(){
                    return  "I am an Anony-Func assigned to a property.";
    };
            }   // overloading not allowed in PHP                             */   

            public function __construct($arg){
                $this->bar = function() use ($arg){
                            return $arg;
                };
            }
            public function bar(){
                echo "<br> Mmber function bar() called. <br>";
            }

}

$obj = new Fool(44);

$hold = $obj->bar();        // This will execute the method
echo '<br>'.$hold;

echo '<br>';

$hold = ($obj->bar)();      // This will execute the property
echo '<br>'.$hold;


//=====================================================================================
?>


<?php
echo "<br>";

echo Does\Not\Exist\Test::class;

//=====================================================================================
?>