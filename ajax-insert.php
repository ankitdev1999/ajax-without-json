<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "school";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db) or die();

//if (isset($_POST["first_name"])){

$fname = $_POST["first_name"];
$lname = $_POST["last_name"];


$insert = "INSERT INTO `student` (`id`, `first_name`, `last_name`) VALUES (NULL, '$fname', '$lname');";

$res = mysqli_query($conn, $insert);
if (mysqli_affected_rows($conn)) {

echo "data inseted";
}else{
echo "data not inseted";

}
mysqli_close($conn)

?>


