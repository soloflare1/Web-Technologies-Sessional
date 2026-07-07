<?php

function greetStudent($name, $course = "Web Tech") {
    return "Name: $name<br>Course: $course<br>";
}
echo greetStudent("Naba");
echo greetStudent("Naba", "Microprocessor");

$square = fn($x) => $x * $x;

echo "Square: ".$square(6);

?>
