 <?php
$servername = "localhost";
$username = "admin";
$password = "";
$dbname = "test";


$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
	die("connection faild : " . $conn->connect_error);

}

$stmt =  $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?,?,?)");
$stmt->bind_param("sss",$firstname,$lastname,$email);



$firstname = "john";
$lastname = "doe";
$email = "abc.email.com";
$stmt->execute();

$firstname = "a";
$lastname = "a";
$email = "abc.email.com";
$stmt->execute();

$firstname = "b";
$lastname = "b";
$email = "abc.email.com";
$stmt->execute();

$firstname = "c";
$lastname = "c";
$email = "abc.email.com";
$stmt->execute();



echo"new recoeds created successfully";

$stmt->close();







$conn->close();
?>