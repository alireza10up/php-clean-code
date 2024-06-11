<?php

# In this principle, all items including input and output of derived classes should be key

interface Database
{
    public function getAll(string $type): array;
}


class MysqlDatabase implements Database
{
    public function getAll(string $type): array
    {
        return [];
    }
}

class MongoDatabase implements Database
{
    public function getAll(string $type): array
    {
        return [];
    }
}
