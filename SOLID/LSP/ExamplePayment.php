<?php

interface OnlinePaymentInterface
{
    public function pay();
    public function verify();
}

interface OfflinePaymentInterface
{
    public function pay();
}


class Gateway
{
    public function pay()
    {
    }

    public function verify()
    {
    }
}


class CartToCart
{
    public function pay()
    {
    }
}
