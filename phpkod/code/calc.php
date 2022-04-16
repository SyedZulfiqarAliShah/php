<html>
<head>
</head>
<body>

<form action="calc.php" method="get" >
n1: <input type="number" name="a" >
<br><br>
n2: <input type="number" name="b" >
<br><br><br>

<input type="submit">
<br><br><br>
Sum = <?php   echo $_GET["a"] + $_GET["b"]    ?>

<hr>

</form>
</body>
</html>
