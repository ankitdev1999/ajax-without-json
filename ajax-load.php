<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "school";

// Create connection
$conn =  mysqli_connect($servername, $username, $password,$db)or die()    ;

$select ="SELECT * FROM `student`";
$res =mysqli_query($conn,$select);
if (mysqli_num_rows($res)>0){

    $outpt= array();
    // Check connection
?>




    <?php
    while ($row = mysqli_fetch_assoc($res)){

   $outpt["i"]= $row["id"];
   $outpt["f"]= $row["first_name"];
   $outpt["l"]= $row["last_name"];

    ?>


        <?php

    }

    echo json_encode($outpt);
}else{
    echo "<h2>RECORD not found</h2>";
}
?>



