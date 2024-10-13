<?php

class Contact
{
    private $name;
    private $number;
    //Constructor
     public function __construct($name, $number)
     {
        $this->name = $name;
        $this->number = $number;
     }
     //Getters
     public function getName()
     {
        return $this->name;
     }
     public function getNumber()
     {
        return $this->number;
     }
     //Setters
     public function setName($name)
     {
        $this->name = $name;
     }

     public function setNumber($number)
     {
        $this->number = $number;
     }
}
?>