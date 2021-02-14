
<?php 

//get input from html using "$_POST[]"
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$passw = $_POST["password"];
$confirm = $_POST["confirm"];


//server connection
$servername = "localhost";
$username = "root";
// there  is no password in default
$password ="";
// our database name
$dbname = "profile";



//sql connection

//lets check its connected
$conn = new mysqli($servername,$username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// in php we use "." operator for string concatenation!
// store sql query in variable
$sql = "INSERT INTO users(user_firstname,user_lastname,user_email,user_pass,user_confirm)
VALUES ('$firstname','$lastname','$email','$passw','$confirm')";

//query execution
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>