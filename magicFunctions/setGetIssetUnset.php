<?php
//magic function __set __get __isset __unset
class MagicTest
{
    /**  Location for overloaded data.  */
    private $data = array();

    public function __set($name, $value)
    {
        echo "Setting value of '$name' = '$value'"."<br>";
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Getting value of '$name' ";
        return $this->data[$name];
    }
    public function __isset($name)
    {
        echo "Is '$name' set? ";
        return isset($this->data[$name]);
    }
    public function __unset($name)
    {
        echo "Unsetting '$name'"."<br>";
        unset($this->data[$name]);
    }
}

$obj = new MagicTest;
//setting value to unaccessable property
$obj->a = 321;
//getting value of unaccessable property
echo $obj->a ."<br>";
//checking if value of 'a' is set using isset
var_dump(isset($obj->a));
//unset value of 'a' using unset
unset($obj->a);
//checking 'a' is set or not
var_dump(isset($obj->a));

?>