<?php
include 'db_connection.php';
$conn = OpenCon();

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pnumber=$_POST['pnumber'];
$comments=$_POST['comments'];

// Inserts the data into database:
$sql = "INSERT INTO user_information (FNAME, LNAME, EMAIL, PNUMBER, COMMENTS) VALUES ('$fname','$lname','$email','$pnumber','$comments')";

// Try submitting:
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
CloseCon($conn);

header("refresh:0; url=index.html");
?>
