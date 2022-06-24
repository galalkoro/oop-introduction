<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/



class Beverages

{
    // Properties

    protected string $color;
    protected float $price;
    protected string $temperature;

    /**
     * @param string $color
     * @param float $price

     */
    public function __construct(string $color, float $price, )
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = 'cold';
    }


    public function getInfo()
    {
        // TODO: Implement __get() method.

        echo "This beverage is $this->temperature and $this->color. <br>";
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }




}

$cooler = new Beverages('black', 2);
$cooler->getInfo();

class Beer extends Beverages{

    // Properties
    protected  string $name;
    protected  float $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price);

        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;

    }

    /**
     * @return float
     */
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    public function BeerInfo(): string{
        return "Hello I'm $this->name and have an alcohol percentage of $this->alcoholPercentage and I have a". $this->getColor() ."color";
    }

}

$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);
echo $duvel->getInfo();
echo $duvel->getAlcoholPercentage();
echo $duvel->getColor();
echo "<br>".$duvel->setColor('light');
echo "color changed to: <br>";
echo $duvel->getColor() . '<br>';
echo $duvel->BeerInfo();