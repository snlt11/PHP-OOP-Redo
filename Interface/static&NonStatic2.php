<!-- Real Example -->
<?php
class UtilityCompany
{
    public static function calculateTax($amount)
    {
        return $amount * 0.10; // 10% tax
    }
}

class CustomerBill
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function getTotalAmount()
    {
        // Calling a static method from a non-static method
        $tax = UtilityCompany::calculateTax($this->amount);

        echo $tax . "<br>";

        $finalAmount = $this->amount + $tax;

        echo $this->amount . "<br>";

        return $finalAmount;
    }
}

// Creating an instance of CustomerBill
$bill = new CustomerBill(100);
echo $bill->getTotalAmount(); // Outputs 110
