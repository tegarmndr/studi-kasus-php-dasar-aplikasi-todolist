<?php

require_once "../Helper/Input.php";

$firstName = input("firstName");
$lastName = input("lastName");
echo "Hello $firstName $lastName" . PHP_EOL;