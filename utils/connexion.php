<?php

$db = "mysql:host=localhost;dbname=zatatour";
$user = "root";
$password = "";

try {
    $db = new PDO ($db,$user,$password);
} catch (Exception $message) {
    echo "il y a un souci <br>" . "<pre>$message</pre>";
}
