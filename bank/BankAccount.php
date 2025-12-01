<?php

class BankAccount
{
    public function __construct(
        public string $owner,
        private float $balance
    ) {
    }

    public function deposit(float $amount)
    {
        if ($amount <= 0) {
            echo "depozītam jābūt pozitīvam {$this->owner}.<br>\n";
            return;
        }

        $this -> balance + $amount;
        echo "Ielikts {$amount} iekšā {$this->owner}.<br>\n";

        
    }
    public function withdraw(float $amount)
    {
        if ($amount <= 0) {
            echo "Summai jābūt pozitīvam {$this->owner}.<br>\n";
            return;
        }
         if ($amount > $this->balance) {
            echo "Nepietiekami līdzekļi {$this->owner}.<br>\n";
            return;
        }
        $this->balance -= $amount;
        echo "Izņemts {$amount} no {$this->owner}.<br>\n";
    }
    public function printInfo(): void
    {
        $balanceFormatted = number_format($this->balance, 2);
        echo "Owner: {$this->owner} | Balance: {$balanceFormatted}.<br>\n";
    }
}