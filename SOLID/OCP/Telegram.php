<?php

class Telegram implements NotificationInterface
{
	public function send(array $params)
	{
		echo "sent telegram ...";
	}
}
