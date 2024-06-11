<?php

include 'autoload.php';

class Notification
{
    public function send(string $type = 'sms', array $params)
    {
        $class = ucfirst($type);

        (new $class)->send($params);
    }
}


$params = ['a', 'b'];

$notification = new Notification();

$notification->send('sms', $params);
