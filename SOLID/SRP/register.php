<?php

class Register
{
    public function save()
    {
        if (!isset($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'])) {
            throw new Exception('Data is Not Valid');
        }

        $servername = 'localhost';
        $username = 'root';
        $password = '123456';
        $dbname = 'clean-code';
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $sql = "INSERT INTO users (firstname , lastname , email, password) VALUES (?,?,?,?)";

        return $conn->prepare($sql)->execute(array_values($_POST));
    }
}