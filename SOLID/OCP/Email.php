<?php

class Email implements NotificationInterface
{
	public function send(array $params)
	{
		echo "sent email ...";
	}
}
