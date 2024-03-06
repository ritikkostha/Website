<?php
// connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname="website1";
$conn= new mysqli($servername, $username, $password ,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

// mysqli_select_db($conn,"website1");

  $user=$_POST["user"];
  $email=$_POST["email"];
  $address1=$_POST["address1"];
  $address2=$_POST["address2"];
  $city=$_POST["city"];
  $stat=$_POST["stat"];
  $zip=$_POST["zip"];
  $comment=$_POST["comment"];


$sql = "INSERT INTO feedback (username, email, adress1, adress2, city, stat, zip, comment) VALUES('$user','$email','$address1','$address2','$city','$stat','$zip','$comment')";
// $sql= "INSERT INTO `feedback`( `username`, `email`, `adress1`, `adress2`, `city`, `state`, `zip`, `comment`) VALUES ('$user','$email','$address1','$address2','$city','$state','$zip','$comment');

echo $sql;

$result=mysqli_query($conn,$sql);

echo $result;

?>

