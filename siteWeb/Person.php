<?php
class Person
{
    public $firstName;
    public $lastName;
    public $age;

    public function __construct($firstName)
    {
        $this->firstName = $firstName;
    }

}

$mhidi = new Person('mehdi');
$hmos = new Person('nizar');
var_dump($mhidi->firstName);
var_dump($hmos->firstName);
//echo $mehdi->lastName . PHP_EOL;