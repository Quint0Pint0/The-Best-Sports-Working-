<?php 


// This script processes form submissions and stores the data in a text file.
// It captures user input, reads existing responses, combines them,
// and writes the new data back to the file while ensuring the latest response is at the top.

// $_POST --- CONTAINS SUBMITTED FORM DATA --- This superglobal array holds all data submitted through an HTML form using the POST method, allowing access to user input for processing or storage.

// print_r() --- FORMAT DATA FOR READABILITY --- This function prints human-readable information about a variable. Used here with a second argument set to true, it returns the output as a string, which contains all the submitted form data.

// file_get_contents() --- READ FILE CONTENTS INTO A STRING --- This function reads the entire contents of the specified file (data.txt) and returns it as a string, allowing you to retrieve previous responses for further processing.

// PHP_EOL --- ADDS LINE BREAKS IN A PLATFORM-SAFE WAY --- This constant represents the end-of-line character for the current platform, ensuring that each new entry in the text file is placed on a new line.

// file_put_contents() --- WRITE DATA TO A FILE --- This function writes the combined content back to the specified file. 

//LOCK_EX --- PREVENTS DATA CORRUPTUION --- Prevents other processes from writing to the file simultaneously, ensuring data integrity.

// echo --- DISPLAY OUTPUT TO THE USER --- This statement outputs a confirmation message to the web page, notifying the user of a successful submission.

// $ or Money Symbol --- IT IS A VARIABLE QUINTON REMEBER!

// ? --- It is part of the ternary operator. Basically says 'if-else' statement. 

// (:) --- ESSENTIAL --- In a ternary operation, it serves as a separator between the expressions that correspond to the true and false outcomes of the condition being evaluated. 

// . --- IMPORTANT FOR MULTIPLE STRINGS! --- Connects multiple strings together. For example, echo "Thank you for your response, " . $firstName . "!"; Since there is 3
// strings of code and we need to combine them all, we surround the second string with the dots. 

//htmlspecialchars --- IMPORTANT --- Converts special characters to HTML entities/ Html language. This helps prevent XSS attacks. For example, a &(ampersand) turns into &amp(Its HTML language/entity).

//implode --- Use it to put multiple strings into 1 line.


// Set the timezone for Florida (Eastern Time)
date_default_timezone_set('America/New_York');

// Default background color
$backgroundColor = 'lightblue'; // Set default to light blue

// Initialize variables
$firstName = '';
$lastName = '';
$sportSelection = '';
$customSport = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form values
    $firstName = htmlspecialchars($_POST['fname'] ?? '');
    $lastName = htmlspecialchars($_POST['lname'] ?? '');
    $customSport = htmlspecialchars($_POST['Custom_Sport!'] ?? '');

    // Capture the selected sports (checkbox values)
    if (isset($_POST['sport'])) {
        $sportSelection = implode(", ", $_POST['sport']);  // Join the selected sports with commas
    } else {
        $sportSelection = 'No sport selected';  // If no sports were selected
    }

    // Check if custom sport was provided, otherwise set it as "No Custom Sport"
    if (empty($customSport)) {
        $customSport = 'No Custom Sport';
    }

    // Get the current date and time in 12-hour format with AM/PM
    $date = date("Y-m-d h:i:s A"); // Format: YYYY-MM-DD HH:MM:SS AM/PM

    // Prepare the string to write to the file
    $newData = "Date: $date" . PHP_EOL;
    $newData .= "Did they like the webpage: " . ($_POST['button'] == '1' ? 'Yes' : 'No') . PHP_EOL;
    $newData .= "First Name: $firstName" . PHP_EOL;
    $newData .= "Last Name: $lastName" . PHP_EOL;
    $newData .= "Sports: $sportSelection" . PHP_EOL;
    $newData .= "Custom Sport: $customSport" . PHP_EOL . PHP_EOL;

    // Define the file path
    $file = '../PHP and Data/data.txt';

    // Read the existing content of the file
    $existingData = file_get_contents($file);

    // Prepend new data at the top
    $combinedData = $newData . $existingData;

    // Write the combined data back to the file
    if (file_put_contents($file, $combinedData, LOCK_EX)) {
        // If successful, keep the background color as light blue
        $backgroundColor = 'lightblue';
    } else {
        // If there's an error, change background color to red
        $backgroundColor = 'lightcoral';
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            font-family: Arial, sans-serif;
            text-align: center;
            font-size: 30px;
        }

        a {
            font-size: 24px;
            color: green;
            border: solid;
            border-radius: 4px;
            border-color: blue;
            padding: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php
    if ($backgroundColor == 'lightblue') {
        echo "<h2>Thank you for your vote, $firstName! <br> You may safely return to the Home page!</h2>";
    } else {
        echo "<h2>There was an error saving your data.</h2>";
    }
    ?>
    <br><br>
    <a href="../Code/Main.html">Click this to return to the Home page</a>
</body>
</html>
