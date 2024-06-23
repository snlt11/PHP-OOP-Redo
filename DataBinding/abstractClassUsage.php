<?php

abstract class PaymentProcessor
{
    public $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    // Abstract methods that must be implemented by subclasses
    public abstract function processPayment();
    public abstract function validatePayment();
}

class CreditCardProcessor extends PaymentProcessor
{
    public function processPayment()
    {
        echo "Processing credit card payment of $" . $this->amount . "\n";
    }

    public function validatePayment()
    {
        echo "Validating credit card payment of $" . $this->amount . "\n";
    }
}

class PayPalProcessor extends PaymentProcessor
{
    public function processPayment()
    {
        echo "Processing PayPal payment of $" . $this->amount . "\n";
    }

    public function validatePayment()
    {
        echo "Validating PayPal payment of $" . $this->amount . "\n";
    }
}

// Usage
$creditCardPayment = new CreditCardProcessor(100);
$creditCardPayment->validatePayment();
$creditCardPayment->processPayment();

$payPalPayment = new PayPalProcessor(200);
$payPalPayment->validatePayment();
$payPalPayment->processPayment();
