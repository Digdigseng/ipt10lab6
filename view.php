<?php
require 'FileUtility.php';

// Open the CSV file and read the data
$persons = FileUtility::openFile('persons.csv');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .record {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 15px;
            background-color: #f9f9f9;
            width: 300px;
        }

        .record-item {
            margin-bottom: 5px;
        }

        .record-item span {
            font-weight: bold;
            display: block;
        }

        .records-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

    </style>
</head>
<body>

<h2>Person Records</h2>

<div class="records-container">
<?php
// Display each person's record as a vertical list
for ($i = 1; $i < count($persons); $i++) {
    echo "<div class='record'>";
    
    echo "<div class='record-item'><span>UUID</span>{$persons[$i][0]}</div>";
    echo "<div class='record-item'><span>Title</span>{$persons[$i][1]}</div>";
    echo "<div class='record-item'><span>First Name</span>{$persons[$i][2]}</div>";
    echo "<div class='record-item'><span>Last Name</span>{$persons[$i][3]}</div>";
    echo "<div class='record-item'><span>Street Address</span>{$persons[$i][4]}</div>";
    echo "<div class='record-item'><span>Barangay</span>{$persons[$i][5]}</div>";
    echo "<div class='record-item'><span>Municipality</span>{$persons[$i][6]}</div>";
    echo "<div class='record-item'><span>Province</span>{$persons[$i][7]}</div>";
    echo "<div class='record-item'><span>Country</span>{$persons[$i][8]}</div>";
    echo "<div class='record-item'><span>Phone Number</span>{$persons[$i][9]}</div>";
    echo "<div class='record-item'><span>Mobile Number</span>{$persons[$i][10]}</div>";
    echo "<div class='record-item'><span>Company Name</span>{$persons[$i][11]}</div>";
    echo "<div class='record-item'><span>Company Website</span>{$persons[$i][12]}</div>";
    echo "<div class='record-item'><span>Job Title</span>{$persons[$i][13]}</div>";
    echo "<div class='record-item'><span>Favorite Color</span>{$persons[$i][14]}</div>";
    echo "<div class='record-item'><span>Birthdate</span>{$persons[$i][15]}</div>";
    echo "<div class='record-item'><span>Email Address</span>{$persons[$i][16]}</div>";
    echo "<div class='record-item'><span>Password</span>{$persons[$i][17]}</div>";
    
    echo "</div>";
}
?>
</div>

</body>
</html>
