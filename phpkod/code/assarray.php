<html>
<head>
</head>
<body>

<form action = "assarray.php" method="post">
<input type="text" name="student">
<input type="submit">

<?php
$grades = array("sajid" => "A+", "saima"=>"A","hashim"=>"B", "Salma" => "A+"); // keys are case sensitive
 // echo $grades["sajid"];
 ?>
<br><br>
<?php
echo count($grades);
?>
<br><br>
<?php
echo $grades[$_POST["student"]];
?>
  <!-- array values can be changed
$grades["saima"] = "A-";
  -->

</body>
</html>
