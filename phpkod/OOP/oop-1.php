<html>
<body>
<h2 align=center> Classes and Objects </h2>
<?php

class First{
            private $a;
            public function assign($s){
                            $a = $s;
            }
            public function Firstfun(){
                echo "<br> I am FirstFun function of class-".get_class()."<br>";                
                var_dump($this);             
            }

            public function myfunc(){
                 echo "<br> My Class name is = ".get_class(); 
                 echo "| and My Data value = ".$this->a;  
            }

}


$a = new First();
$b = new First;
$str = 'First';
$c = new $str();  // variable-function style
// shows different ways of creating objects.
$a->Firstfun();
$b->Firstfun();
$c->Firstfun();

$a->assign(25);

echo "<br><br> Php version ID = ".PHP_VERSION_ID;
echo "<br> First::class = ".First::class;
echo "<hr>";
//----------------------------------------------------------------

 $assigned = $a;
        $assigned->myfunc();

 $refer = & $a;
        $refer->myfunc();



?>
</body>
</html>
