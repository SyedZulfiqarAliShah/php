<html>
<head>
</head>
<body>

<?php
echo "<h2> Built-in Arrays</h2>";

foreach ($_SERVER as $key => $value) {
  echo $key." : ".$value."<br>";
}
echo "<hr>";

foreach ($_ENV as $key => $value) {
  echo $key." : ".$value."<br>";
}
echo "<hr>";

foreach ($GLOBALS as $key => $value) {
  echo $key." : ".$value."<br>";
}
echo "<hr>";
/*
foreach ($_POST as $key => $value) {
  echo $key." : ".$value."<br>";
}
echo "<hr>";

foreach ($_GET as $key => $value) {
  echo $key." : ".$value."<br>";
}
echo "<hr>";

foreach ($_COOKIE as $key => $value) {
  echo $key." : ".$value."<br>";
}
echo "<hr>";

foreach ($_SESSION as $key => $value) {
  echo $key." : ".$value."<br>";
}
echo "<hr>";

foreach ($_REQUEST as $key => $value) {
  echo $key." : ".$value."<br>";
}
echo "<hr>";

*/
 ?>

</body>
</html>
