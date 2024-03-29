<?php

# ❌
$date = date('y-m-d');
# ✅
$currentDate = date('y-m-d');

# ❌
$allowed = ['jpg', 'pdf'];
# ✅
$allowedFileExtension = ['jpg', 'pdf'];

# ❌
$data = Video::latest(10);
# ✅
$recentVideos = Video::latest(10);

# ℹ️ When receiving data from api, use 'payload' for variable suffix
$userPayload = $httpClient->get('https://api.com/users');

# ℹ️ when data is boolean use prefix 'is' for variable
$isActive = true;

# ℹ️ don't use prefix for class member
abstract class User
{
    # ❌
    public string $userFirstName;
    # ✅
    public string $firstName;

    # ❌
    abstract public function getUserFullName();

    # ❌ always use verb
    abstract public function UserFullName();

    # ✅
    abstract public function getFullName();
}

# ℹ️ always use type hint for control type variable
function addition(int $number1, int $number2): int
{
    return $number1 + $number2;
}

# ℹ️ null coalescing operator

# ❌
if (isset($_GET['name'])) {
    $name = $_GET['name'];
} elseif (isset($_POST['name'])) {
    $name = $_POST = ['name'];
} else {
    $name = 'alireza';
}

# ✅ coalescing operator
$name = $_GET['name'] ?? $_POST['name'] ?? 'alireza';

# ℹ️ use constants with meaningful names for contracts
class OnlinePayment
{
    const MELLAT_GATEWAY = 1;
    const BLUBANK_GATEWAY = 2;
    const SAMAN_GATEWAY = 3;

    public function pay($gateway): void
    {
        $result = match ($gateway) {
            self::MELLAT_GATEWAY => 'redirect mellat gateway',
            self::BLUBANK_GATEWAY => 'redirect blubank gateway',
            self::SAMAN_GATEWAY => 'redirect saman gateway',
            default => 'throw error gateway not found',
        };
     }
}