<?php
class Test
{
    public function __call($name, $arguments)  //for object
    {
        echo "Calling object method '$name' ". implode(', ', $arguments). "<br>";  //implode to convert array to string
    }

    public static function __callStatic($name, $arguments)  //for static
    {
        echo "Calling static method '$name' ". implode(', ',$arguments)."<br>";
    }
}

$obj = new Test;
$obj->runTest('in object context');

Test::runTest('in static context');
?>