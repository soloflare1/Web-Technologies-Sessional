<?php

$name = "Bob";
$age = 20;
$status = ($age >= 18) ? "Adult" : "Minor";
echo "Name: $name<br>";
echo "Status: $status<br>";
$username = $_GET["user"] ?? "Guest";
echo "User: $username<br>";
$count ??= 0;
echo "Count: $count<br>";
$result = 5 <=> 10;
echo "Comparison Result: $result";

?>
