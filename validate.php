<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $class = $_POST["class"];
    $dob = $_POST["dob"];


    $name = htmlspecialchars($name);
    $phone = htmlspecialchars($phone);
    $class = htmlspecialchars($class);
    $dob = htmlspecialchars($dob);


    echo "Name: " . $name . "<br>";
    echo "Phone Number: " . $phone . "<br>";
    echo "Class: " . $class . "<br>";
    echo "Date of Birth: " . $dob . "<br>";
}
?>
