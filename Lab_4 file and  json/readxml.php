<?php
$xmlFile = 'student.xml';

if (file_exists($xmlFile)) {
    $xml = simplexml_load_file($xmlFile);
    
    if ($xml === false) {
        echo "Failed loading XML: ";
        foreach (libxml_get_errors() as $error) {
            echo "<br>", $error->message;
        }
    } else {
        foreach ($xml->student as $student) {
            echo "First Name: " . $student->Fname . "<br>";
            echo "Last Name: " . $student->Lname . "<br>";
            echo "Age: " . $student->age . "<br>";
            echo "Skills: ";
            foreach ($student->skills->skill as $skill) {
                echo $skill . " ";
            }
            echo "<br><br>";
        }
    }
} else {
    echo "XML file does not exist.";
}
?>