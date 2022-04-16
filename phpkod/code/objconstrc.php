<html>
<body>
  <?php
class Book {
  var $title;
  var $author;
  var $pages;

  function __construct($nm,$tit,$n){

    $this->title = $tit;
    $this->author = $nm;
    $this->pages = $n;
  }

  function show(){
    echo $this->author; echo "<br>";
    echo $this->title; echo "<br>";
    echo $this->pages; echo "<br>";

  }
}

$bk1 = new Book("Arshiyal","Science ", 100);
$bk2 = new Book("Shawal", "Mathematics", 300);

$bk1->show();
echo "<br><br>";
$bk2->show();
  ?>

</body>
</html>
