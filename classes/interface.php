<?php

    // Interface just strict requirements
    interface PaymentProcessor{
        public function processPayment(float $amount): bool;
        public function refundPayment(float $amount): bool;
    }// Interface a contract and this just guarantees that those classes will have certain functionality.
     // Specifically they will implement some methods.


    //Abstract class requirements plus how to achieve that
    abstract class OnlinePaymentProcessor implements PaymentProcessor{ // Abstract Base Class
        //public - accessible everywhere
        //protected - in base and child classes
        //private - only in the class where it's defined

        public function __construct(
            protected string $apiKey
        ){}

        abstract protected function validApiKey(): bool; // abstract method needs to be implemented to every single child
        abstract protected function executePayment(float $amount): bool;
        abstract protected function executeRefund(float $amount): bool;


        public function processPayment(float $amount): bool{
            if(!$this->validApiKey()){
                throw new Exception("Invalid API Key");
            }
            return $this->executePayment($amount);
        }

        public function refundPayment(float $amount): bool{
            if(!$this->validApiKey()){
                throw new Exception("Invalid API Key");
            }
            return $this->executeRefund($amount);
        }
    }

    class StripeProcessor extends OnlinePaymentProcessor{ // Concrete Class
        protected function validApiKey(): bool{
            return strpos($this->apiKey, 'sk_') === 0;
        }

        protected function executePayment(float $amount): bool{
            echo "Processing Stripe payment of $amount\n";
            return true;
        }

        protected function executeRefund(float $amount): bool{
            echo "Processing Stripe refund of $amount\n";
            return true;
        }
    }

    class PaypalProcessor extends OnlinePaymentProcessor{
        protected function validApiKey(): bool{
            return strlen($this->apiKey) === 32;
        }

        protected function executePayment(float $amount): bool{
            echo "Processing Paypal payment of $amount\n";
            return true;
        }

        protected function executeRefund(float $amount): bool{
            echo "Processing Paypal refund of $amount\n";
            return true;
        }
    }

    class CashPaymentProcessor implements PaymentProcessor{
        public function processPayment(float $amount): bool{
            echo "Cash payment";
            return true;
        }
        public function refundPayment(float $amount): bool{
            echo "Cash refund";
            return true;
        }
    }

    class OrderProcessor{ // Runtime Polymorphism

        public function __construct(private PaymentProcessor $paymentProcessor){ // Developer prefer Composition over Inheritance           
        }

        public function processOrder(float $amount): void{
            if ($this->paymentProcessor->processPayment($amount)){
                echo "Order processed successfully\n";
            }
            else{
                echo "Order processing failed\n";
            }
        }

        public function refundOrder(float $amount): void{
            if ($this->paymentProcessor->refundPayment($amount)){
                echo "Order processed successfully\n";
            }
            else{
                echo "Order processing failed\n";
            }
        }
    }

    $stripeProcessor = new StripeProcessor("sk_test_123456");
    $paypalProcessor = new PaypalProcessor("valid_paypal_api_key_32charslong");
    $cashlProcessor = new CashPaymentProcessor();

    $stripeOrder = new OrderProcessor($stripeProcessor);
    $paypalOrder = new OrderProcessor($paypalProcessor);
    $stripeOrder = new OrderProcessor($cashlProcessor);

    $stripeOrder -> processOrder(100.00);
    $paypalOrder -> processOrder(150.00);
    $stripeOrder -> processOrder(50.00);

    $stripeOrder -> refundOrder(25.00);
    $paypalOrder -> refundOrder(50.00);
    $stripeOrder -> refundOrder(10.00);