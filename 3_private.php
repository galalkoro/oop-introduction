<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcohol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/




class Beverages

{
    // Properties

    public string $color;
    public float $price;
    public string $temperature;

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
    private  string $name;
    private  float $alcoholPercentage;

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

