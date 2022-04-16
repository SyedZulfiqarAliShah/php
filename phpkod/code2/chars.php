<html>
<body>
<h3 align=center>Character Incrementation in PHP </h3>
<?php
$cc = 'z'; 
// try different initial values and observe the change by increment.
// Such as $cc = 'A7' , $cc = 'A05'

for($i=1; $i<800; ++$i)
{
  //echo ++$cc. str_repeat('&nbsp;' , 20);
  echo ++$cc.'<br>';

}


?>
</body>
</html>
