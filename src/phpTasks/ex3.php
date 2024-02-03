<?php
$title = "Ex3";
include 'header.php';

    ?>

    <form method="post" action="process_form.php">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required>

        <button type="submit">Submit</button>
    </form>



    <?php
// Declare two string variables
$str1 = "Hello";
$str2 = "World";

// Join the strings together
$joinedString = $str1 . " " . $str2;

// Print the joined string
echo "Joined String: $joinedString<br>";

// Print the length of the string
$length = strlen($joinedString);
echo "Length of the String: $length";
?>



<?php
// Declare variables for the numbers
$num1 = 298;
$num2 = 234;
$num3 = 46;

// Add up the numbers
$sum = $num1 + $num2 + $num3;

// Output the result
echo "The sum of $num1, $num2, and $num3 is: $sum";
?>
<?php
// Get the user agent string from $_SERVER variable
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Check for common browsers
if (strpos($userAgent, 'MSIE') !== false || strpos($userAgent, 'Trident') !== false) {
    $browser = 'Internet Explorer';
} elseif (strpos($userAgent, 'Firefox') !== false) {
    $browser = 'Mozilla Firefox';
} elseif (strpos($userAgent, 'Chrome') !== false) {
    $browser = 'Google Chrome';
} elseif (strpos($userAgent, 'Safari') !== false) {
    $browser = 'Apple Safari';
} elseif (strpos($userAgent, 'Opera') !== false || strpos($userAgent, 'OPR') !== false) {
    $browser = 'Opera';
} else {
    $browser = 'Unknown';
}

// Output the result
echo "You are using: $browser";
?>


<?php
// Get the current script's filename
$currentScript = $_SERVER['PHP_SELF'];

// Extract the filename using basename
$filename = basename($currentScript);

// Get the last modified time of the file
$lastModifiedTime = filemtime($filename);

// Format the last modified time using date
$lastModifiedFormatted = date("F j, Y, g:i a", $lastModifiedTime);

// Output the last modified time in the footer
echo "<p>Last modified: $lastModifiedFormatted</p>";
?>


<?php include 'footer.php'; ?>
