<?php
namespace ClassContainer;
class vehicle {
    protected $type;    // sedan, hatchback, jeep
    protected $model;
    protected $brand;

    public function __construct($tp , $md , $bd){
        $this->type = $tp;
        $this->model = $md;
        $this->brand = $bd;
    }
    public function showdata(){
        echo "<br> This vehicle is of type $this->type , model $this->model and brand $this->brand";
    }
}
//--------------------------------------------------------------------------------------------------------------
class car extends vehicle {
    private $price;
    private $power;
    public function __construct($tp, $md, $bd, $prc, $pwr){
                parent::__construct($tp, $md, $bd);
                $this->price = $prc;
                $this->power = $pwr;
    }

    public function showdata(){
                parent::showdata();
                echo "<br> Its price is $this->price$ and power is $this->power CC";
    }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////

class Super {
    private static $ctr;
    
    public function __construct(){
        ++$ctr;
    }
    public function parent_func(){
        echo "<br> I am parent class public function";
    }
    public static function showcount(){
        return self::$ctr;
    }
}
//-------------------------------------------------------------------
class Base extends Super {
    private static $ctr;
    
    public function __construct(){
        ++$ctr;
    }
    public function child_func(){
        echo "<br> I am Child Class public function";
    }
    public static function showcount(){
        return self::$ctr;
    }
}

?>