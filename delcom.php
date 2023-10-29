
<?php
// Include the database connection file
include 'connectcustcre.php';

// Check if the `delid` GET parameter is set
if (isset($_GET['delid'])) {

    // Get the `delid` GET parameter
    $id = $_GET['delid'];

    // Create the SQL query to delete the customer complaint
    $sql = "DELETE FROM `customer_complain` WHERE `User_id` = '$id'";

    // Execute the SQL query
    $result = mysqli_query($con, $sql);

    // If the SQL query was successful
    if ($result) {

        // Redirect the user to the display complain page
        header('location:displaycomplain.php');
    } else {

        // Display an error message
        die(mysqli_error($con));
    }
}