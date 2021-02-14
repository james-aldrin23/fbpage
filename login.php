
<?php 

//server connection
$servername = "localhost";
$username = "root";
// there  is no password in default
$password = "";
// our database name
$dbname = "profile";




//get input from html using "$_POST[]"
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm = $_POST["confirm"];





//sql connection





//lets check its connected
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// in php we use "." operator for string concatenation!
// store sql query in variable
$sql = "insert into profile(firstname,lastname,email,password,confirm)
VALUES ('$firstname', '$lastname', '$email','$confirm')";

//query execution
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





?>