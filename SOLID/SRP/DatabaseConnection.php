<?php

class DatabaseConnection {
    private function connect(): PDO
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '123456';
        $dbname = 'clean-code';
        return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
}