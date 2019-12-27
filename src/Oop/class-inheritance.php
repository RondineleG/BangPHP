<?php


class Vehicle
{

    private $model;
    public $color;
    public $year;

    public function Move()
    {
        print("Moving");
    }

    public function Stop()
    {
        print("Stoping");
    }
    public function getModel()
    {
        return $this->model;
    }    
    public function setModel($model)
    {
        $this->model = $model;       
    }
     
}
class Car extends Vehicle
{
    public function Cleaner()
    {
        print "Cleaning in 321";
    }
}

class Motorcycle extends Vehicle
{
    public function Cram()
    {
        print "Cram in 321";
    }

    
    
}

$car = new Car();
$car->model ="Uno";
$car->color ="Red";
$car->year ="1992";
$car->Move();
print "<br>";
$car->Cleaner();
var_dump($car);

$motorcycle = new Motorcycle();
$motorcycle->model ="R1";
$motorcycle->color ="Green";
$motorcycle->year ="2010";
$motorcycle->Stop();
print "<br>";
$motorcycle->Cram();
var_dump($motorcycle);


$vehicle = new Vehicle();
$vehicle->model ="Gol";
$vehicle->color ="Black";
$vehicle->year ="2011";
$vehicle->Stop();
print "<br>";
print $vehicle->getModel();
var_dump($vehicle);

