<?php

$db = mysqli_connect("localhost","root","","company");

/* Get the customer's billing information from the POST request. */

$Full_name=$_POST["fname"];
$E_mail=$_POST["mail"];
$Address=$_POST["add"];
$User_ID=$_POST["uid"];
$Package=$_POST["pack"];
$Month=$_POST["bmonth"];
$N_card=$_POST["cname"];
$Card_no=$_POST["cnum"];
$Exp_month=$_POST["emonth"];
$Exp_year=$_POST["eyear"];
$CVV_no=$_POST["cv"];



/* Construct a SQL INSERT INTO statement to insert the customer's billing information into the customer_bill table. */
//value insertation
$sql = "INSERT INTO
customer_bill( 
`Full_name`,
E_mail,
`Address`, 
`User_ID`, 
Package,
`Month`,
N_card , 
 `Card_no`,
 Exp_month,Exp_year,CVV_no) VALUES('$Full_name','$E_mail','$Address','$User_ID','$Package','$Month','$N_card','$Card_no','$Exp_month','$Exp_year','$CVV_no')";
//$sql = "INSERT INTO student_info(id,student_name) VALUES($Student_id  ,'$Student_name')";
/* Execute the SQL statement. */

if(mysqli_query($db,$sql)){

	/* If the SQL statement is successful, display an alert message to the user confirming that their payment is complete and redirect them to the user dashboard. */

	echo '<script type="text/javascript"> alert("Your Payment is complete.")
	window.location.href = "u_dashboard.php";</script>';
}
else
{/* If the SQL statement fails, display an error message to the user. */
	echo "There is an error".mysqli_error($db);
	
}
?>


