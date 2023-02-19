<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "school";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db) or die();

//if (isset($_POST["first_name"])){

$id = $_POST["id"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];


$select = "UPDATE `student` SET `first_name`='$fname',`last_name`='$lname'  WHERE id=$id;";

$res = mysqli_query($conn, $select);

if ($res) {
    echo 1;
}else{
    echo "".mysqli_error($conn);

}
mysqli_close($conn)

?>
