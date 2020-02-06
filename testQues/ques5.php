
<?php
class test
{
    function setBookName($name)
    {
        $this->name=$name;
        $this->price=1000;
    }
    function printBookName()
    {
        echo "Book name : ".$this->name;
    }
    function getBookPrice()
    {
        echo "\nBook price : ".$this->price;
    }
}
$t1=new test();
$t1->setBookName("Computer");
$t1->printBookName();
$t1->getBookPrice();
?>