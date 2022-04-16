<?php

class BankAccount {    

    public ?string $name = "";    // the ? declares $name as nullable. Means null can be assigned to it.
    public  ?int $accountNum = 0;
    public  ?float $balance = 0.0;
// Note if a class property is not declared as nullable, then null cannot be assigned to it
// Also note, if above three nullable properties are uninitialized. Then these are NOT NULL.

    public function __construct(){
        echo "<br> I am Created <br>";
        echo "<br> My properties initial state is: $this->name , $this->accountNum and $this->balance";
        echo "<br> var_dump(\$name) = ";
              var_dump($this->name);
        echo "<br> var_dump(\$accountNum) = ";
              var_dump($this->accountNum);
        echo "<br> var_dump(\$balance) = ";
              var_dump($this->balance);

        $this->name = $this->accountNum = $this->balance = null;
        echo "<br><br> My properties nulled state is: $this->name , $this->accountNum and $this->balance";
        echo "<br> var_dump(\$name) = ";
              var_dump($this->name);
        echo "<br> var_dump(\$accountNum) = ";
              var_dump($this->accountNum);
        echo "<br> var_dump(\$balance) = ";
              var_dump($this->balance);
    }
}    


 new BankAccount;




?>




