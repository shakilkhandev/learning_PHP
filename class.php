<?php

class vehicle
{
    public $brand;
    public $wheelnum;
    public $model;

    public static $count = 0;

    function __construct($brand, $model, $wheelnum)
    {

        $this->brand = $brand;
        $this->model = $model;
        $this->wheelnum = $wheelnum;
        self::$count++;

    }


    function getModel()
    {

        echo "The model is : " . $this->model;
        echo PHP_EOL ;
    }
     
    function getTotal()
    {

        echo "Total number of Vehicle is : " . self::$count -1 ;
        echo PHP_EOL;
    }


}

class car extends vehicle
{
    public static $carcount = 0 ;
    private $passenger;

    function __construct($brand, $model, $wheelnum, $passenger)
    {

        parent::__construct($brand, $model, $wheelnum);

        $this->passenger = $passenger;

        self::$carcount++;
    }

    function getInfo()
    {


        echo "Details of the Car \n";
        echo "brand :" . $this->brand . "\n";
        echo "model :" . $this->model . "\n";
        echo "Wheelnum :" . $this->wheelnum . "\n";
        echo "passenger :" . $this->passenger . "\n";


    }


    function carCount()
    {

        
        echo "Total car is : " . self::$carcount;
        echo PHP_EOL;
    }


}



class bike extends vehicle
{    

    public static $bikeCount = 0 ;


    public $break;
    public $cc;

    function __construct($brand, $model, $wheelnum, $break, $cc)
    {
        parent::__construct($brand, $model, $wheelnum);

        $this->break = $break;
        $this->cc = $cc;

         self:: $bikeCount ++ ;

    }

    function getInfo()
    {


        echo "Details of the Bike \n";
        echo "Brand :" . $this->brand . "\n";
        echo "Model :" . $this->model . "\n";
        echo "Engine Power :" . $this->cc . "\n";
        echo "Break type :" . $this->break . "\n";



    }

    function bikeCount()
    {

        
        echo "Total Bike is : " . self::$bikeCount;
        echo PHP_EOL;
    }


}


$car1 = new car("Toyota", "premio", 4, 5);
$bike1 = new bike("Yamaha","FZ",2,"ABS",160);




$car1->getInfo();

echo PHP_EOL ;

$bike1->getInfo();



$car1->carCount();

$bike1->bikeCount();













$vehicle = new vehicle("","","");
$vehicle->getTotal();









