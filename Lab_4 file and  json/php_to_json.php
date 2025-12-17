<?php
$data = [
    "student" => [
        [
            "Fname" => "getahun",
            "Lname" => "fikade",
            "age" => 22,
            "skill" => ["php", "react", "algorithm"]
        ]
    ]
];

// Create the JSON file
$jsondata = json_encode($data, JSON_PRETTY_PRINT);
$datafile = file_put_contents("student.json", $jsondata);
echo "The JSON file is successfully created. " . $datafile . "<br>";

// Read the JSON file
$jsonFile = file_get_contents("student.json");

// Decode the JSON data
$data = json_decode($jsonFile, true);
if ($data !== null) {
    foreach ($data['student'] as $student) {
        echo "First Name: " . $student['Fname']  . "<br>" ."<br>";
        echo "Last Name: " . $student['Lname'] . "<br>" ."<br>";
        echo "Age: " . $student['age']  . "<br>" ."<br>";
        echo "First Skill: " . $student['skill'][0] . "<br>" ."<br>"; 
    }
} else {
    echo "Error decoding JSON.<br>";
}
?>