<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "school";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db) or die();

//if (isset($_POST["first_name"])){

$stid = $_POST["stid"];


$del = "DELETE FROM `student` WHERE id=$stid";

$res = mysqli_query($conn, $del);
if (mysqli_affected_rows($conn)) {

echo 1;
}else{
echo 0;

}
mysqli_close($conn)

?>
