<?php

$user = [
    "name" => "ممد",
    "age" => 21,
    "city" => "Tehran"
];

$user["age"] = 22;                // ویرایش مقدار
$user["job"] = "Programmer";      // اضافه کردن کلید جدید

echo $user["age"] . "<br>";
echo $user["job"];

?>