# oop-introduction
### php:

Whats is OOP?

OOP stands for Object-Oriented Programming.

## Classes 
Is programmer define data type, 
which includes local functions as well as local
data. As you can see on our first exercise: 
```` 
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
        echo "This beverage is $this->temperature and $this->color.";
    }
}
````
## Extending 
The extends keyword is used to derive a class
from another class. This is called inheritance. as 
example of it you can extend from our 
first exercise.
```
class Beer extends Beverages{
    // Properties
    public  string $name;
    public  float $alcoholPercentage;

    public function __construct(string $color,
     float $price, string $name, float $alcoholPercentage)
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
}
```
## Private 
Private :: A private variable or method can 
only be accessed internally from the class
in which it is defined. This means that a 
private variable or method cannot be called
from a child that extends the class.
As I am going to explain with example blew:
```
class Beer extends Beverages{
    // Properties
    private  string $name;
    private  float $alcoholPercentage;
    
    public function __construct(string $color, float $price, string $name, float $alcoholPercentage)
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
````
## Protected:
Protected means that a class and its subclasses
have access to the variable, but not any other
classes, they need to use a getter/setter to
do anything with the variable. as explain on this example 
blew 
```
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
```

## Public
Public functions works outside the class,
inside the class within the programming code 
in PHP and in some other programming languages
too. in our example blew explain that.
```
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
```