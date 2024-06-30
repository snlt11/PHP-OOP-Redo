<?php

class Rental
{
    public $driver, $car;
    public function __construct(Car $car, Driver $driver)
    {
        $this->car = $car;
        $this->driver = $driver;
    }
    public function getDriver()
    {
        return $this->driver;
    }
    public function getCar()
    {
        return $this->car;
    }
}

class Driver
{
    public $name, $age, $family, $hourlyRate, $martialStatus;

    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setAge(int $age)
    {
        $this->age = $age;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function setFamily(array $family)
    {
        $this->family = $family;
    }
    public function getFamily(): array
    {
        return $this->family;
    }
    public function setHourlyRate(float $hourlyRate)
    {
        $this->hourlyRate = $hourlyRate;
    }
    public function getHourlyRate(): float
    {
        return $this->hourlyRate;
    }
    public function setMartialStatus(bool $martialStatus)
    {
        $this->martialStatus = $martialStatus;
    }
    public function getMartialStatus(): bool
    {
        return $this->martialStatus;
    }
}

class Car
{
    public $name, $model, $color, $year, $price, $spares;
    public function __construct($name, $model, $color, $year, $price, $spares)
    {
        $this->name = $name;
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;
        $this->price = $price;
        $this->spares = $spares;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getModel(): string
    {
        return $this->model;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function getYear(): int
    {
        return $this->year;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function getSpares(): array
    {
        return $this->spares;
    }
}

$nameOne = new Driver();
$nameOne->setName("Tun Tun");
$nameOne->setAge(10);
$nameOne->setFamily(["father" => "One", "mother" => "Two"]);
$nameOne->setHourlyRate(1.2);
$nameOne->setMartialStatus(true);

$nameTwo = new Driver();
$nameTwo->setName("Two");
$nameTwo->setAge(30);
$nameTwo->setFamily(["father" => "Two", "mother" => "One"]);
$nameTwo->setHourlyRate(1.5);
$nameTwo->setMartialStatus(false);

$firstCar = new Car("BMW", "X5", "Black", 201, 10000, ["wheels" => 4, "doors" => 4, "seats" => 4]);
$secondCar = new Car("Audi", "A5", "White", 202, 20000, ["wheels" => 6, "doors" => 8, "seats" => 12]);


$rentOne = new Rental($firstCar, $nameOne);
$rentTwo = new Rental($secondCar, $nameTwo);

$list = [$rentOne, $rentTwo];

echo $rentOne->getDriver()->getName() . "</br>";

echo "<pre>" . print_r($list, true) . "</pre>";
