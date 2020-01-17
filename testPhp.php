<?php
//to string
class myClass 
{
    function __construct() {
    	$this->name="Anand";
    	$this->id="za[321";
        echo "In constructor"."<br>";
    }

    function __destruct() {
        echo "<br>"."Destroying " . __CLASS__ . "<br>";
    }
    public function __toString()
    {
    	return $this->name;
    }
}

$obj = new myClass();
echo $obj;
?>