<?php
// $email= $_GET['email'];
// $password= $_GET['password'];

// echo "your email is $email, your password is $password";
//echo "hello world";

$conn = mysqli_connect("localhost","root","oreo@7904","hungry_hippo");

$expiryDate = $_GET['expiryDate'];
$name= $_GET['name'];
$imageURL = $_GET['imageURL'];

//$date = date("Y-M-D");
$sql = "INSERT INTO foods(name , expiryDate, imageURL) VALUES ('$name', '$expiryDate', '$imageURL')" ;
$result = mysqli_query($conn,$sql);

if (!$result){
die("Oops, something went wrong!");
}
echo "data added";
?>