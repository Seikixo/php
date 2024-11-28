<?php

    class BankAccount{

        private float $balance = 0;

        public function getBalance(): float{
            return $this->balance;
        }

        public function deposite(float $amount): void{
            if($amount > 0 ){
                $this->balance += $amount;
            }
        }

        public function withdraw(float $amount): bool{
            if($amount > 0 && $this->balance >= $amount){
                $this->balance -= $amount;
                return true;
            }
            else{
                return false;
            }
        }
    }

    $account = new BankAccount();
    $account->deposite(1000);
    $withDrawSuccess = $account->withdraw(500);

    var_dump(
        $withDrawSuccess,
        $account->getBalance()        
    );
