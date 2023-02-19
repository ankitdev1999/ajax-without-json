<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "school";

// Create connection
$conn =  mysqli_connect($servername, $username, $password,$db)or die()    ;

$search = $_POST["search"];
$select ="SELECT * FROM `student` where first_name like '%$search%' or last_name like '%$search%';";
$res =mysqli_query($conn,$select);
if (mysqli_num_rows($res)>0){

    $outpt='<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Action</th>
       
    </tr>
    </thead>
    <tbody>';
// Check connection
    ?>




    <?php
    while ($row = mysqli_fetch_assoc($res)){
        $outpt.=  "<tr>
            <th scope=\"row\">{$row ["id"]}</th>
            <td>{$row ["first_name"]}</td>
            <td>{$row ["last_name"]}</td>
            
            <td>
            <button  type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#showModal\" class=\"btn btn-edit btn-primary\" data-id='{$row ["id"]}'  >EDIT</button>
            <button  type=\"button\" class=\"btn btn-delet btn-primary\" data-id='{$row ["id"]}'  >Delete</button></td>

        </tr>"


        ?>


        <?php

    }
    $outpt.="   </tbody>
</table>";
    echo $outpt;
}else{
    echo "<h2>RECORD not found</h2>";
}
?>



