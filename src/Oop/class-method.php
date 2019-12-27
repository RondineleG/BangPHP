<?php

class Person
{
    public $name;
    public $age;


    public function Speak()
    {
          print $this->name . " has ".$this->age." years old";
    }
    
}
    

    $rondinele = new Person();
    $rondinele->name = "Rondinele Guimaraes";
    $rondinele->age = 27;

    $rondinele->Speak();



