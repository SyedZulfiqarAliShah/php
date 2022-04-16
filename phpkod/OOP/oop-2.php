<html>
<body>
<h2 align=center> Classes and Objects </h2>
<?php

class Shape {
        private $len;
        private $wid;
        private $nm;
        public function __construct($nam){
                        $this->nm = $nam;
        }
        public function setdata( $l , $w){
                        $this->len = $l;
                        $this->wid = $w;
        }
        public function showdata(){
                    echo "<br> Length = $this->len and Width = $this->wid <br>";
                    echo "Area = ".$this->len*$this->wid;
        }
        public function __toString(){
            return $this->nm;
        }

}

 $a = new Shape('box-1');
    $a->setdata(12, 20);
    $a->showdata();

echo '<br>';

 $b = new Shape('box-2');
    $b->setdata(20, 15);
    $b->showdata();

echo '<br><br> Accessing $a object with alias';

$handle_a = $a;
    $handle_a->showdata();

echo '<br><br> Accessing $a object with Reference Var';

$refer_a = &$a;
    $refer_a->showdata();

echo '<br><br> Comparing handles <br>';
echo " Value of \$a = ".$a."<br>";
echo "<br> Value of \$handle_a = ".$handle_a."<br>";
echo "<br> Value of \$refer_a = ".$refer_a."<br>";

echo "<hr>";
//----------------------------------------------------------------

$handle_a = null;

 var_dump($a);           echo '<br>';
 var_dump($handle_a);    echo '<br>';  // copy of $a
 var_dump($refer_a);                   // refernce of $a         

// In above three ways of accessing same object, there is no differene at all.

echo "<hr>";
//----------------------------------------------------------------

echo  new Shape( 'Amazing' );                   //works fine

(new Shape( 'Amazing' ))->showdata();               //works fine




?>
</body>
</html>
