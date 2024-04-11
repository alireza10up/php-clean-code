<?php

class User
{
    private function save(): bool
    {
        $conn = $this->connectToDatabase();

        $sql = "INSERT INTO users (firstname , lastname , email, password) VALUES (?,?,?,?)";

        return $conn->prepare($sql)->execute(array_values($_POST));
    }

    private function connectToDatabase()
    {
        return (new DatabaseConnection())->connect();
    }
}