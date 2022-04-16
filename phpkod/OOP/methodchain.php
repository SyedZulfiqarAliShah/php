<?php

class BankAccount {    

    public  $accountNum;
    public  $balance;

    public function __construct(){
        echo "<br> I am Created <br>";
    }
    public function deposit($amt){
        if($amt > 0)        
               $this->balance += $amt;
        return $this;                
    }

    public function withdraw($amt){
        $this->balance -= $amt;
        return $this;
    }

    public function showBalance(){
        echo "<br> Balance = ".$this->balance;
    }

    public function __destruct(){
        echo "<br><br> I am deleted <br>";
    }
}


$acc1 = new BankAccount;

echo "<br> Checking default values of properties Using var_dump() <br>.";

echo "<br> \$acc1->accountNum = ";
      var_dump($acc1->accountNum);
echo "<br> \$acc1->balance = ";
      var_dump($acc1->balance);

echo "<br>";

$acc1->deposit(200);
echo "<br> Balance = ".$acc1->balance;

$acc1->deposit(300)
     ->deposit(500)
     ->deposit(700);
     
echo "<br> Balance = ".$acc1->balance;

$acc1->deposit(600)
     ->withdraw(800)
     ->showBalance();

$acc1 = null;

echo "<br> After deletion";




?>




