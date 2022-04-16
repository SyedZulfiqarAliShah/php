<html>
<head>
</head>
<body>

<?php
echo "<h2 align=center> Multi-Dimensional Arrays </h2>";

for($t=0; $t < 3; $t++){
for($row = 0; $row <= 10; $row++){
    for($col = 0; $col < 3; $col++){
      $data[$t][$row][$col] = rand(10, 99);
    }
  }
}

print_r($data); // printing the whole 3D-array
echo "<br><br><hr><br>";

for($i=0; $i< count($data); $i++){
   echo "TABLE-".($i+1)."<br>";
   for($j=0; $j < 10; $j++){
      for($k=0; $k < 3; $k++){
              echo $data[$i][$j][$k]."&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
      }
      echo "<br>";
   }
   echo "<hr>";
}

 ?>

</body>
</html>
