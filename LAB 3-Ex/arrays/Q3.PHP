<?php
$students = [
    ["name" => "Hana", "subject" => "Math", "mark" => 85],
    ["name" => "Liya", "subject" => "English", "mark" => 90],
    ["name" => "Musa", "subject" => "Science", "mark" => 78]
];

echo "Student Details:<br>";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Subject: " . $student["subject"] . ", Mark: " . $student["mark"] . "<br>";
}
?>
