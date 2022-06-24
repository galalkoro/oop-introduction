<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/



class Beverages

{
    // Properties


    private string $color;
    private float $price;
    private string $temperature;

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

        echo "This beverage is $this->temperature and $this->color.";
    }
    public function TheTemperature(): string {
        return "Temperature is: $this->temperature <br>";
    }

    public function NewPrice(float $price): string
    {
        if ($price < 0){
            return "New price is: $this->price = $price";
        }
        return  "Remember price can not be neg or null ";

    }

}

$cooler = new Beverages('black', 2);
$cooler->getInfo();
echo "<br>".$cooler->TheTemperature();
echo $cooler->NewPrice(3.5);