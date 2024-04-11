<?php

class Register
{
    public function save(): bool
    {
        $params = $_POST;

        (new Validator())->validate($params);

        return (new User())->save($params);
    }
}