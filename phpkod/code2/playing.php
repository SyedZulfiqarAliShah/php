<html>
<body>
<h2>Playing </h2>
<?php

for($ul=1; $ul <= 3; ++$ul)
{
$line = 12;
   for( $l=12; $l >= 1; --$l )
       {
           for($c=1; $c<=6; ++$c)
                {   
                    echo "<font color=red>".str_repeat("*", $l)."</font>"; 
                    if(($line - $l) != 11)
                        echo str_repeat("&nbsp", ($line-$l)*4);  
                    else    
                        {
                            echo str_repeat("&nbsp", 21);
                            echo "*";
                            echo str_repeat("&nbsp", 21);
                        }
                    echo "<font color=green>".str_repeat("*", $l)."</font>";           
                }
           echo "<br>";           
       }

   for( $l=1; $l <= 12; ++$l )
       {
           for($c=1; $c<=6; ++$c)
           {
               echo "<font color=maroon>".str_repeat("*", $l)."</font>"; 
               echo str_repeat("&nbsp", ($line-$l)*4);  
               echo "<font color=blue>".str_repeat("*", $l)."</font>";
           }
           echo "<br>";           
       }
} // 3 times printing
//----------------------------------------------------------------------------------

?>
</body>
</html>
