

<!-- If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input). -->

<?php
    // Initialize variables
    $number = "";
    $result = "";

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input from the form
        $number = $_POST["number"];

        // Validate number input
        if (!empty($number) && is_numeric($number) && $number >= 0) {
            // Generate multiplication table
            $result = "<h2>Multiplication Table for $number</h2><ul>";

            for ($i = 1; $i <= 10; $i++) {
                $result .= "<li>$number x $i = " . ($number * $i) . "</li>";
            }

            $result .= "</ul>";
        } else {
            $result = "<p>Please enter a valid non-negative number.</p>";
        }
    }
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter a number: <input type="text" name="number" value="<?php echo $number;?>">
    <input type="submit" name="submit" value="Generate Table">
</form>

<?php
    // Display the multiplication table result
    echo $result;
?>

<!-- Task 3 -->

<!-- Get the current month name; -->



<?php 

$currentMonth =date("F");

$response ="";

switch($currentMonth){
    case "August":

    $response="It's August, so it's still holiday.";

    break;
    
    default:
    $response="Not August, this $currentMonth so I don't have any holidays";
    break;
    
    
    
}

    ?>



<!-- task 4 : For loop -->
<?php
    // Initialize variables
    $number = "";
    $result = "";

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input from the form
        $number = $_POST["number"];

        // Validate number input
        if (!empty($number) && is_numeric($number)) {
            // Generate multiplication table
            $result = "<h2>Multiplication Table for $number</h2><table border='1'><tr><th>Multiplier</th><th>Result</th></tr>";

            for ($i = 1; $i <= 10; $i++) {
                $result .= "<tr><td>$i</td><td>" . ($number * $i) . "</td></tr>";
            }

            $result .= "</table>";
        } else {
            $result = "<p>Please enter a valid number.</p>";
        }
    }
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter a number: <input type="text" name="number" value="<?php echo $number;?>">
    <input type="submit" name="submit" value="Generate Table">
</form>

<?php
    // Display the multiplication table result
    echo $result;
?>





<!-- While loop -->

<?php
    // Initialize variables
    $n = "";
    $result = "";

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input from the form if it's set
        $n = isset($_POST["n"]) ? $_POST["n"] : "";

        // Validate input
        if (!empty($n) && is_numeric($n) && $n >= 1) {
            // Generate numbers from 1 to n using a while loop
            $result = "<h2>Numbers from 1 to $n:</h2><ul>";

            $counter = 1;
            while ($counter <= $n) {
                $result .= "<li>$counter</li>";
                $counter++;
            }

            $result .= "</ul>";
        } else {
            $result = "<p>Please enter a valid positive number.</p>";
        }
    }
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter a number: <input type="text" name="n" value="<?php echo $n;?>">
    <input type="submit" name="submit" value="Generate Numbers">
</form>

<?php
    // Display the result
    echo $result;
?>



<?php
    // Define the array
    $myarray = array("HTML", "CSS", "PHP", "JavaScript");

    // Display the array elements using a foreach loop
    echo "<h2>Array Elements:</h2><ul>";

    foreach ($myarray as $element) {
        echo "<li>$element</li>";
    }

    echo "</ul>";
?>

