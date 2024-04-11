<?php

class Validator
{
    private function validate(array $params): void
    {
        if (!isset($params['firstname'], $params['lastname'], $params['email'], $params['password'])) {
            throw new Exception('Data is Not Valid');
        }
    }
}