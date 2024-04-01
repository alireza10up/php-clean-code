<?php

# ℹ️ many Arguments handle
class Questionnaire
{
    # ❌
    public function __construct($firstName, $lastName, $sex, $city, $region, $phone, $email)
    {
    }

    # ✅
    public function __construct(User $user, Address $address, Contact $contact)
    {
    }

    # ❌ when we have many Arguments
    public function register($firstName, $lastName, $sex, $phone, $age, $city)
    {
    }

    # ✅ Replace it with data of type array
    public function register(array $information)
    {
    }

}

class User
{
    public string $firstName;
    public string $lastName;
    public int $sex;
}

class Address
{
    public string $city;
    public string $region;
}

class Contact
{
    public int $phone;
    public string $email;
}

# ==========================================

class Notification
{
    # ❌                                   # ℹ️ don't use flag
    public function handle($message, $user, $type = 'email')
    {
    }

    # ✅                                  # ℹ️ don't use flag
    public function send($message, $user, $sendEmail = true)
    {
    }

    # ℹ️ don't use flag for detect functionality replace with new function
    public function sendEmail($message, $user)
    {
        # ℹ️ encapsulation

        # ❌
        if ($user->status == 'active') {
            // send email
        }

        # ✅
        if ($user->isActive()) {
            // send email
        }
    }

    public function sendSms($message, $user)
    {
    }
}

# ℹ️ encapsulation
class User
{
    # ❌
    public $status; // 'active' , 'inactive'
    # ✅
    private $status; // 'active' , 'inactive'

    # ℹ️ encapsulation
    public function isActive()
    {
        return $this->status == 'active';
    }
}