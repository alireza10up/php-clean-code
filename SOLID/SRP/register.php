<?php

class Register
{
    public function save(): bool
    {
        (new Validator())->validate();

        return (new User())->storeInDatabase();
    }
}