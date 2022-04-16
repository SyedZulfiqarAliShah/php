<?php

class Simple {
        private string $nm;
        public function __construct($nam){
                        $this->nm = $nam;
        }
        public function Namechng(Simple $smp, $str){
                            echo "<br> Object Passed to Namechng() as argument = ".$smp->nm;
                            $smp->mgc($this , $str);
        }
        private function mgc(Simple $obj, $st){
                            echo "<br> Object Name before change = ".$this->nm;
                            echo "<br> Changing object name = ".$obj->nm;
                            $obj->nm = $st;

        }
        public function __toString(){
            return $this->nm;
        }

}

$objt = new Simple('SimpleClass');
$second = new Simple("SecondObject");

echo "<br> First Object name = ".$objt;
echo "<br> Second Object name = ".$second;

$second->Namechng( new Simple('TestingObject') , "NewName" );
echo "<br><br> After Second Object name changed = ".$second;

echo "<hr>";
//----------------------------------------------------------------



?>

