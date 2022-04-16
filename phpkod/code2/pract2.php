<html>
<head>
</head>
<body>
<h2>Practice 2 Corner</h2>
<?php
echo "<h4> STRINGS IN PHP </h4>";
$strs = 'single-quoted string';
$strd = 'double-quoted string';
$hdstr = <<< ET
   I am an eaxmple of heredoc string, in which parsing is done. \n
   Line 1
    Line 2
       Line 3
       I am \$strs and my value is $strs \n
       I am \$strd and my value is $strd.
ET;

$ndstr = <<< 'ND'
   I am an eaxmple of NOWDOC string, in which parsing is not done. \n
   Line 11
    Line 12
       Line 13
       I am \$strs and my value is $strs \n
       I am \$strd and my value is $strd.
ND;

echo "<br>".$strs;
echo "<br>".$strd."<br><br>";
// echo "<br><br>".$hdstr."<br><br>";
echo nl2br($hdstr)."<br><br>"; // converts newline to break to add newlines
echo nl2br($ndstr);

echo "<br>------------------------------------------------------------------------------------------------<br>";
?>
</body>
</html>
