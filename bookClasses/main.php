<?php


class book
{
    public $Name;
    public $Price;
    public $Writer;
    public $Sold;
    public static $Stock = 200;

    public function bookinfo()
    {
        echo "Name:  $this->Name <br>";
        echo "Price: $this->Price <br>";
        echo "Writer: $this->Writer <br>";
        echo "How many was sold: $this->Sold <br>";
        echo "How many have left: ".$this::$Stock."<br>";
    }

    public function sellinfo($num)
    {
        book::$Stock-=$num;
        $this->Sold +=$num;
    }
}

$book1 = new book();
$book1->Name = "Boof-Koor";
$book1->Price = "45000";
$book1->Writer = "Sadegh-Hedayat";
echo "<h3>Book Information</h3>";
$book1->sellinfo(10);
$book1->bookinfo();
