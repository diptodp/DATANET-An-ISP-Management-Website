

<?php
session_start();// Start a PHP session.
$db = mysqli_connect("localhost","root","","company");// Connect to the MySQL database.

if(!$db)// If the connection to the database fails, display an error message and exit the script.
{
	die ("Database not connected" .mysqli_connect_error());
}

$Complain_box=$_POST["complain"];// Get the customer's complaint from the POST request.

date_default_timezone_set('Asia/Dhaka');// Set the default time zone to Dhaka, Bangladesh.
$date = date('Y-m-d h:i:sa');

$str = $_SESSION['user_name'];// Get the customer's name from the session variable.

//value insertation
$sql="INSERT INTO
customer_complain( 
`User_ID`,
`Complain_box`,
c_date) VALUES('$str','$Complain_box','$date')";



mysqli_query($db,$sql); // Execute the SQL statement.
echo '<script type="text/javascript"> alert("We have received your complaint. One of our IT expert will contact you very soon.Thank you for staying with Datanet.");
window.location.href = "u_dashboard.php";
</script>';
 

?>