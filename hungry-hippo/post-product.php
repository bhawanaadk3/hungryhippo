<?php
// echo "working??";
//$email =$_GET['email'];
//echo "<br>";
//$password =$_GET['password'];
//echo "Hey your email is $email and password is $password"; 
$hostname = "localhost";
$db_username = "root";
$db_password ="bhawanaadk";
$db_name ="hungry_hippo";

$conn = mysqli_connect($hostname,$db_username,$db_password,$db_name);

$expiryDate = $_GET["expiryDate"];
$name = $_GET["name"];
$imageURL= $_GET["imageURL"];

$date = date("Y-m-d");
$sql = "INSERT INTO foods (name,expiryDate,imageURL) VALUES ('$name','$expiryDate','$imageURL')";
$result = mysqli_query($conn,$sql);

if(!$result){
    die("opps,wrong value");
}

header("location:/");


echo "data added";


?>

