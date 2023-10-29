<?php // This line starts the PHP script
include 'connectempcre.php'; // This line includes the database connection file

if (isset($_POST['submit'])) { // This line checks if the submit button is clicked

    // Get all the input values
    $Emp_id = $_POST["eid"]; // This line gets the employee ID from the input field
    $Emp_name = $_POST["name"]; // This line gets the employee name from the input field
    $Join_Date = $_POST["jdate"]; // This line gets the join date from the input field
    $NID = $_POST["nid"]; // This line gets the NID from the input field
    $Phone_no = $_POST["phn"]; // This line gets the phone number from the input field
    $Email = $_POST["mail"]; // This line gets the email address from the input field
    $Address = $_POST["add"]; // This line gets the address from the input field
    $Password = $_POST["pass"]; // This line gets the password from the input field
    $Salary = $_POST["salary"]; // This line gets the salary from the input field

    // Create the SQL query to insert the employee information into the database
    $sql = "INSERT INTO
employee_info( 
`Emp_id`,
Emp_name,
Join_Date,
NID, 
Phone_no,
Email,
`Address`,
`Password`, 
`Salary`) VALUES('$Emp_id','$Emp_name','$Join_Date','$NID',$Phone_no,'$Email','$Address','$Password','$Salary')"; // This line creates the SQL query

    // Execute the SQL query
    $result = mysqli_query($con, $sql); // This line executes the SQL query

    // Check if the query was successful
    if ($result) { // This line checks if the query was successful

        // Redirect to the display employee page
        header('location:displayemp.php'); // This line redirects to the display employee page

    } else { // This line is executed if the query was not successful

        // Die with an error message
        die(mysqli_connect_error($con)); // This line dies with an error message

    }
}

?> 






<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">


  <title>Employee insertation</title>
</head>

<body style="background: linear-gradient(to bottom, #70e1f5, #ffd194);">
  <div class="container my-5">
    <div class style="text-align:center;">
      <h2><u>Add New Employee</u></h2>
</div>
    <form method="post">
      <div class="form-group">
        <label><strong>Employee ID</strong></label>
        <input type="text" class="form-control" placeholder="Enter Employee ID" name="eid">
      </div>

      <div class="form-group">
        <label><strong>Name</strong></label>
        <input type="text" class="form-control" placeholder="Enter Name" name="name">
      </div>

      <div class="form-group">
        <label><strong>Joining Date</strong></label>
        <input type="Date" class="form-control" placeholder="Enter Joining Date" name="jdate">
      </div>

      <div class="form-group">
        <label><strong>NID</strong></label>
        <input type="num" class="form-control" placeholder="Enter Joining Date" name="nid">
      </div>

      <div class="form-group">
        <label><strong>Phone No</strong></label>
        <input type="tel" class="form-control" placeholder="Enter Phone Number" name="phn">
      </div>

      <div class="form-group">
        <label><strong>Email</strong></label>
        <input type="email" class="form-control" placeholder="Enter Email Address" name="mail">
      </div>

      <div class="form-group">
        <label><strong>Address</strong></label>
        <input type="text" class="form-control" placeholder="Enter Address" name="add">
      </div>

      <div class="form-group">
        <label><strong>Password</strong></label>
        <input type="password" class="form-control" placeholder="Enter Password" name="pass">
      </div>
      <div class="form-group">
        <label><strong>Salary</strong></label>
        <input type="text" class="form-control" placeholder="Enter Salary " name="salary">
      </div>

      <br>

      <button type="submit" class="btn 
      btn-primary" name="submit">Submit</button>
      <button class="btn btn-primary my-5" input type="button"class="text-light" onclick="history.back()">Go Back!</button>
    </form>

  </div>
</body>

</html>