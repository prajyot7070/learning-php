<?php

class Vector
{
    public int $x, $y;

    public function __construct(int $x = 0, int $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function display(): void
    {
        echo "Vector($this->x, $this->y)\n";
    }
}

class Vector3D extends Vector
{
    public int $z;

    public function __construct(int $x = 0, int $y = 0, int $z = 0)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    // overiding parent classs method
    public function display(): void
    {
        echo "Vector3D($this->x, $this->y, $this->z)\n";
    }
}

//access modifiers
class BankAccount
{
    private float $balance = 0;

    public function deposit(float $amount): void
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

// Usage
$v2 = new Vector(10, 20);
$v2->display();

$v3 = new Vector3D(5, 10, 15);
$v3->display();

$account = new BankAccount();
$account->deposit(500.75);
echo "Account Balance: " . $account->getBalance() . "\n";