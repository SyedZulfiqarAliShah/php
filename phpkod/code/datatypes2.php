<html>
<head>
</head>
<body>

<?php

echo "This is the name of scripting file on this SERVER =   ";
 echo $_SERVER['SCRIPT_NAME'];
 ?>
<hr>

<?php
 $age = 42;
 $name = "Zulfiqar";
 $married = true;
 $height = 5.10;

 echo "Checking Types of Variables. <br><br>";

 if(is_int($age) )
    echo "your age = $age years.".'<br><br>';

 if(is_string($name) )
       echo "your name = $name ".'<br><br>';

 if(is_float($height) )
          echo "your height = $height feet.".'<br><br>';

 if(is_bool($married) )
             echo "your marrital status = $married.".'<br><br>';

  echo gettype($age) , "<br>";
  echo gettype($name) , "<br>";
  echo gettype($height) , "<br>";
  echo gettype($married) , "<br>";
 ?>

</body>
</html>
