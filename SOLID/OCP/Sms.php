<?php

class Sms implements NotificationInterface
{
	public function send(array $params)
	{
		echo "sent sms ...";
	}
}

