<?php

# ℹ️ encapsulation

# ℹ️ In no way should object states in the program be changed from outside, they should be available through getter and setter.

# ℹ️ Access level : public , private , protected

class Wallet
{
    # ❌
    public int $balance;
    # ✅
    private int $balance;

    # ℹ️ change access it to private and available it with setter and getter
    public function getBalance(): int
    {
        return $this->balance;
    }

    public function chargeBalance(int $amount): void
    {
        # ℹ️ in setter we can have condition
        if ($amount > 100) {
            throw new Exception('amount invalid');
        }

        $this->balance = $amount;
    }

    public function withdraw(int $amount): void
    {
        # ℹ️ in setter we can have condition
        if ($amount > $this->balance) {
            throw new Exception('amount invalid');
        }

        $this->balance = $this->balance - $amount;
    }
}

$wallet = new Wallet();

try {
    $wallet->chargeBalance(10000);
} catch (Exception $e) {
    var_dump($e);
}