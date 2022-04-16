<html>
<head>
</head>
<body>

<?php  ?>
<form action="first0.php" method="get" >
Name: <input type="text" name="nm" >
<br><br>
Age: <input type="number" name="age" >
<br><br><br>

<input type="submit">
<br><br><br>
Your name is <?php   echo $_GET["nm"]    ?>
<br><br>
You are <?php   echo $_GET["age"]    ?> years old.
<hr>

</form>
</body>
</html>
