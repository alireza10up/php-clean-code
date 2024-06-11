<?php

interface PaymentInterface
{
    public function pay();
}

interface MustBeVerified
{
    public function verify();
}

class OnlinePayment implements PaymentInterface, MustBeVerified
{
    public function pay()
    {
    }

    public function verify()
    {
    }
}

class CartToCart implements PaymentInterface
{
    public function pay()
    {
    }
}
