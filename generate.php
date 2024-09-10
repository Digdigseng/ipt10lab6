<?php
require 'FileUtility.php';
require 'Random.php';

// Generate random person data
$persons = Random::generatePersons(300);

// Save the generated data into persons.csv
FileUtility::writeToFile('persons.csv', $persons);

echo "300 records have been generated and saved to persons.csv";
?>
