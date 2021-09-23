<?php 
  //creating connection to database
$con=mysqli_connect("localhost","root","","smp") or die(mysqli_error());

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['Name']);
$Phone = $con->real_escape_string($_POST['phone']);
$Email = $con->real_escape_string($_POST['Email']);
$message = $con->real_escape_string($_POST['msg']);

  //query to insert the variable data into the database
$sql="INSERT INTO contactus(name, phone, email, message) VALUES ('".$Name."','".$Phone."','".$Email."','".$message."')";

  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $con->error . ']');
}
else
   echo "Thank you! We will get in touch with you soon";
}

?>