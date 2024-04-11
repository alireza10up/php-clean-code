<?php

class User
{
    private function save(array $params): bool
    {
        $conn = $this->connectToDatabase();

        $sql = "INSERT INTO users (firstname , lastname , email, password) VALUES (?,?,?,?)";

        return $conn->prepare($sql)->execute(array_values($params));
    }

    private function connectToDatabase()
    {
        return (new DatabaseConnection())->connect();
    }
}