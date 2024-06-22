<?php

interface PaymentMethods{
    public function depositMoney();
    public function withdrawMoney();
    public function transferMoney();
    public function refundPayment();
}

class Paypal implements PaymentMethods{
    public function depositMoney(){
        echo "Paypal deposit money";
    }
    public function withdrawMoney(){
        echo "Paypal withdraw money";
    }
    public function transferMoney(){
        echo "Paypal transfer money";
    }
    public function refundPayment(){
        echo "Paypal refund payment";
    }
}
class CreditCard implements PaymentMethods{
    public function depositMoney(){
        echo "Credit card deposit money";
    }
    public function withdrawMoney(){
        echo "Credit card withdraw money";
    }
    public function transferMoney(){
        echo "Credit card transfer money";
    }
    public function refundPayment(){
        echo "Credit card refund payment";
    }
}
class Bank implements PaymentMethods{
    public function depositMoney(){
        echo "Bank deposit money";
    }
    public function withdrawMoney(){
        echo "Bank withdraw money";
    }
    public function transferMoney(){
        echo "Bank transfer money";
    }
    public function refundPayment(){
        echo "Bank refund payment";
    }
}

$paypal = new Paypal();

$paypal->depositMoney();

$creditCard = new CreditCard();

$creditCard->withdrawMoney();
