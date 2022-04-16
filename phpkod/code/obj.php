<html>
<body>
  <?php
class Book {
  var $title;
  var $author;
  var $pages;
}

$bk1 = new Book;

$bk1->title = "Science";
$bk1->author = "Shawal";
$bk1->pages = 1000;

echo $bk1->title;
echo "<br>";
echo $bk1->author;
echo "<br><br>";

$bk2 = new Book;

$bk2->title = "Mathematics";
$bk2->author = "Arshiyal";
$bk2->pages = 700;

echo $bk2->title;
echo "<br>";
echo $bk2->author;
  ?>

</body>
</html>
