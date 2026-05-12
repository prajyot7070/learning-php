<?php

class SmartObject
{
    private array $data = [];

    // constructor
    public function __construct()
    {
        echo "Object initialized.\n";
    }

    //setter
    public function __set($name, $value)
    {
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }

    // getter
    public function __get($name)
    {
        echo "Getting '$name': ";
        return $this->data[$name];
    }

    // called when object is called as string
    public function __toString()
    {
        return "Treated as string.\n";
    }

    // destructor
    public function __destruct()
    {
        echo "Object destroyed.\n";
    }
}

// constructor
$obj = new SmartObject();

//setter and getter
$obj->name = "Prajyot";
echo $obj->name . "\n";

echo $obj;

