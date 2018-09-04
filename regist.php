/*Dalee Kumawat
 RegNo : 2017IS17
*/
<?php
$username = "root";
$password = "";
$dbname = "shoesdb";
$dbhost = "localhost";
$connection = mysqli_connect( $dbhost, $username, $password, $dbname );
if (mysqli_connect_errno()) {
	die("Database connection failed: " . mysqli_connect_error() . mysqli_connect_errno());
}


if (! isset($_POST["submit"]))  {
	header("Location: register.html");
}
$loginUser =  $_POST["usernameregister"];
$loginEmail =  $_POST["emailregister"];
$loginPass = $_POST["passwordregister"];
$query = "INSERT * FROM register WHERE (username = '" . $loginUser . "' AND email ='" . $loginEmail . "' AND password = '" . $loginPass . "')";
$results = mysqli_query( $connection, $query );
	header("Location: register.html");
?>