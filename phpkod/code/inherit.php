<html>
<body>
  <?php
class Book {
  private $title;
  private $author;
  protected $pages;

  function __construct($tit,$nm,$n){

    $this->title = $tit;
    $this->author = $nm;
    $this->pages = $n;
  }

  function show(){
    echo $this->author; echo "<br>";
    echo $this->title; echo "<br>";
    echo $this->pages; echo "<br>";

  }
} // end of class Book
//-------------------------------------------------
class CourseBook extends Book {
      public $subject;

      function __construct($tit, $aut, $n, $sub){
        $this->title = $tit;
        $this->author = $aut;
        $this->pages = $n;
        $this->subject = $sub;
      }

      function show(){
        echo "Author= ".$this->author."<br>";
        echo "Title = ".$this->title."<br>";
        echo "No of Pages = ".$this->pages."<br>";
        echo "Subject = ".$this->subject."<br>";
      }

} // end of CourseBook
//------------------------------------------
$bk1 = new Book("Science ","Arshiyal", 100);
$bk2 = new Book("Mathematics","Shawal",  300);
$bk1->show();
echo "<br><br>";
$bk2->show();
echo "--------------------------------------"."<br><br>";
$bk3 = new CourseBook("Approximation Algorithms","S.M.Jhone",1000,"Computer Science ");
$bk4 = new CourseBook("Theory of Computation","Sipser",4000,"Computer Science");
$bk3->show();
echo "<br><br>";
$bk4->show();
  ?>

</body>
</html>
