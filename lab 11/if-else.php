<?php

$marks = 100;
$name = "Naba";

if ($marks >= 80) {
    echo "Name: $name<br>";
    echo "Grade: A+<br>";
    echo "GPA: 4.00<br>";
} elseif ($marks > 60) {
    echo "Name: $name<br>";
    echo "Grade: A<br>";
    echo "GPA: 3.75<br>";
} else {
    echo "Name: $name<br>";
    echo "Grade: B<br>";
    echo "GPA: 3.00<br>";
}

switch ($marks) {
    case 100:
        echo "Perfect score!";
        break;

    default:
        echo "Keep improving";
}

?>
