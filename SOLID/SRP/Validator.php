<?php

class Validator
{
    private function validate(): void
    {
        if (!isset($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'])) {
            throw new Exception('Data is Not Valid');
        }
    }
}